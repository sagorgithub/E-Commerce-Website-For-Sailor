<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\GeneralSetting;

class FacebookTrackingService
{
    protected $pixelId;
    protected $accessToken;
    protected $apiVersion;
    protected $enabled;

    public function __construct()
    {
        $settings = GeneralSetting::first();
        $this->pixelId = $settings->facebook_pixel_id ?? null;
        $this->accessToken = $settings->facebook_conversion_api_token ?? null;
        $this->apiVersion = $settings->facebook_conversion_api_version ?? 'v17.0';
        $this->enabled = $settings->facebook_server_side_tracking ?? false;
    }

    /**
     * Send server-side event to Facebook Conversion API
     */
    public function sendEvent($eventName, $eventData = [], $userData = [])
    {
        if (!$this->enabled || !$this->pixelId || !$this->accessToken) {
            Log::info('Facebook Server-Side Tracking disabled or not configured');
            return false;
        }

        try {
            $payload = [
                'data' => [
                    [
                        'event_name' => $eventName,
                        'event_time' => time(),
                        'action_source' => 'website',
                        'event_source_url' => request()->url(),
                        'user_data' => $this->prepareUserData($userData),
                        'custom_data' => $eventData
                    ]
                ],
                'access_token' => $this->accessToken
            ];

            $response = Http::post("https://graph.facebook.com/{$this->apiVersion}/{$this->pixelId}/events", $payload);

            if ($response->successful()) {
                Log::info('Facebook event sent successfully', [
                    'event' => $eventName,
                    'response' => $response->json()
                ]);
                return true;
            } else {
                Log::error('Facebook event failed', [
                    'event' => $eventName,
                    'response' => $response->json()
                ]);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('Facebook tracking error', [
                'event' => $eventName,
                'error' => $e->getMessage()
            ]);
            return false;
        }
    }

    /**
     * Send Purchase event
     */
    public function sendPurchaseEvent($orderData, $userData = [])
    {
        $eventData = [
            'currency' => 'BDT',
            'value' => $orderData['amount'] ?? 0,
            'content_ids' => $orderData['product_ids'] ?? [],
            'content_type' => 'product',
            'order_id' => $orderData['order_id'] ?? null,
            'num_items' => $orderData['num_items'] ?? 1
        ];

        return $this->sendEvent('Purchase', $eventData, $userData);
    }

    /**
     * Send AddToCart event
     */
    public function sendAddToCartEvent($productData, $userData = [])
    {
        $eventData = [
            'currency' => 'BDT',
            'value' => $productData['price'] ?? 0,
            'content_ids' => [$productData['product_id'] ?? ''],
            'content_type' => 'product',
            'content_name' => $productData['name'] ?? '',
            'quantity' => $productData['quantity'] ?? 1
        ];

        return $this->sendEvent('AddToCart', $eventData, $userData);
    }

    /**
     * Send ViewContent event
     */
    public function sendViewContentEvent($productData, $userData = [])
    {
        $eventData = [
            'currency' => 'BDT',
            'value' => $productData['price'] ?? 0,
            'content_ids' => [$productData['product_id'] ?? ''],
            'content_type' => 'product',
            'content_name' => $productData['name'] ?? '',
            'content_category' => $productData['category'] ?? ''
        ];

        return $this->sendEvent('ViewContent', $eventData, $userData);
    }

    /**
     * Send InitiateCheckout event
     */
    public function sendInitiateCheckoutEvent($cartData, $userData = [])
    {
        $eventData = [
            'currency' => 'BDT',
            'value' => $cartData['total'] ?? 0,
            'content_ids' => $cartData['product_ids'] ?? [],
            'content_type' => 'product',
            'num_items' => $cartData['num_items'] ?? 0
        ];

        return $this->sendEvent('InitiateCheckout', $eventData, $userData);
    }

    /**
     * Prepare user data for Facebook
     */
    protected function prepareUserData($userData)
    {
        $prepared = [];

        if (!empty($userData['email'])) {
            $prepared['em'] = hash('sha256', strtolower(trim($userData['email'])));
        }

        if (!empty($userData['phone'])) {
            $prepared['ph'] = hash('sha256', preg_replace('/[^0-9]/', '', $userData['phone']));
        }

        if (!empty($userData['first_name'])) {
            $prepared['fn'] = hash('sha256', strtolower(trim($userData['first_name'])));
        }

        if (!empty($userData['last_name'])) {
            $prepared['ln'] = hash('sha256', strtolower(trim($userData['last_name'])));
        }

        if (!empty($userData['city'])) {
            $prepared['ct'] = hash('sha256', strtolower(trim($userData['city'])));
        }

        if (!empty($userData['state'])) {
            $prepared['st'] = hash('sha256', strtolower(trim($userData['state'])));
        }

        if (!empty($userData['zip'])) {
            $prepared['zp'] = hash('sha256', trim($userData['zip']));
        }

        if (!empty($userData['country'])) {
            $prepared['country'] = hash('sha256', strtolower(trim($userData['country'])));
        }

        // Client IP address
        $prepared['client_ip_address'] = request()->ip();

        // User agent
        $prepared['client_user_agent'] = request()->userAgent();

        return $prepared;
    }

    /**
     * Check if tracking is enabled
     */
    public function isEnabled()
    {
        return $this->enabled && $this->pixelId && $this->accessToken;
    }

    /**
     * Get tracking configuration
     */
    public function getConfig()
    {
        return [
            'pixel_id' => $this->pixelId,
            'api_version' => $this->apiVersion,
            'enabled' => $this->enabled
        ];
    }
}
