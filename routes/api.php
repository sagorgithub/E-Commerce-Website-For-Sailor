<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrontendController;


Route::group(['namespace' => 'Api', 'prefix' => 'v1', 'middleware' => 'api'], function () {

    Route::get('app-config', [FrontendController::class, 'appconfig']);
    Route::get('slider', [FrontendController::class, 'slider']);
    Route::get('category-menu', [FrontendController::class, 'categorymenu']);
    Route::get('hotdeal-product', [FrontendController::class, 'hotdealproduct']);
    Route::get('homepage-product', [FrontendController::class, 'homepageproduct']);
    Route::get('footer-menu-left', [FrontendController::class, 'footermenuleft']);
    Route::get('footer-menu-right', [FrontendController::class, 'footermenuright']);
    Route::get('social-media', [FrontendController::class, 'socialmedia']);
    Route::get('contactinfo', [FrontendController::class, 'contactinfo']);

    //  Home Page Api End =================================

    Route::get('category/{id}', [FrontendController::class, 'catproduct']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Facebook Server-Side Tracking API Routes
Route::post('/facebook/track', function (Request $request) {
    try {
        $eventName = $request->input('event_name');
        $eventData = $request->input('event_data', []);
        $userData = $request->input('user_data', []);

        if (!$eventName) {
            return response()->json(['error' => 'Event name is required'], 400);
        }

        $facebookTracking = app(\App\Services\FacebookTrackingService::class);

        if (!$facebookTracking->isEnabled()) {
            return response()->json(['error' => 'Facebook tracking is disabled'], 400);
        }

        $result = $facebookTracking->sendEvent($eventName, $eventData, $userData);

        if ($result) {
            return response()->json(['success' => true, 'message' => 'Event tracked successfully']);
        } else {
            return response()->json(['error' => 'Failed to track event'], 500);
        }
    } catch (\Exception $e) {
        return response()->json(['error' => 'Internal server error: ' . $e->getMessage()], 500);
    }
});
