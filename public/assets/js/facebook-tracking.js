/**
 * Facebook Server-Side Tracking Integration
 * This file handles client-side Facebook tracking events
 */

class FacebookTracking {
    constructor() {
        this.config = window.facebookTrackingConfig || {};
        this.isEnabled = this.config.enabled || false;
        this.pixelId = this.config.pixelId;
        this.enhancedEcommerce = this.config.enhancedEcommerce || false;
        this.customEvents = this.config.customEvents || {};
    }

    /**
     * Send client-side event to Facebook Pixel
     */
    sendClientEvent(eventName, eventData = {}) {
        if (!this.isEnabled || !window.fbq) {
            console.log('Facebook tracking not enabled or fbq not available');
            return;
        }

        try {
            window.fbq('track', eventName, eventData);
            console.log('Facebook client event sent:', eventName, eventData);
        } catch (error) {
            console.error('Facebook client event error:', error);
        }
    }

    /**
     * Send server-side event via AJAX
     */
    sendServerEvent(eventName, eventData = {}, userData = {}) {
        if (!this.isEnabled) {
            console.log('Facebook server-side tracking not enabled');
            return;
        }

        fetch('/api/facebook/track', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ? .getAttribute('content') || ''
                },
                body: JSON.stringify({
                    event_name: eventName,
                    event_data: eventData,
                    user_data: userData
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Facebook server event sent:', eventName, data);
            })
            .catch(error => {
                console.error('Facebook server event error:', error);
            });
    }

    /**
     * Track AddToCart event
     */
    trackAddToCart(productData) {
        const eventData = {
            currency: 'BDT',
            value: productData.price || 0,
            content_ids: [productData.product_id || ''],
            content_type: 'product',
            content_name: productData.name || '',
            quantity: productData.quantity || 1
        };

        // Send both client and server events
        this.sendClientEvent('AddToCart', eventData);
        this.sendServerEvent('AddToCart', eventData);
    }

    /**
     * Track ViewContent event
     */
    trackViewContent(productData) {
        const eventData = {
            currency: 'BDT',
            value: productData.price || 0,
            content_ids: [productData.product_id || ''],
            content_type: 'product',
            content_name: productData.name || '',
            content_category: productData.category || ''
        };

        this.sendClientEvent('ViewContent', eventData);
        this.sendServerEvent('ViewContent', eventData);
    }

    /**
     * Track InitiateCheckout event
     */
    trackInitiateCheckout(cartData) {
        const eventData = {
            currency: 'BDT',
            value: cartData.total || 0,
            content_ids: cartData.product_ids || [],
            content_type: 'product',
            num_items: cartData.num_items || 0
        };

        this.sendClientEvent('InitiateCheckout', eventData);
        this.sendServerEvent('InitiateCheckout', eventData);
    }

    /**
     * Track Purchase event
     */
    trackPurchase(orderData) {
        const eventData = {
            currency: 'BDT',
            value: orderData.amount || 0,
            content_ids: orderData.product_ids || [],
            content_type: 'product',
            order_id: orderData.order_id || null,
            num_items: orderData.num_items || 1
        };

        this.sendClientEvent('Purchase', eventData);
        this.sendServerEvent('Purchase', eventData);
    }

    /**
     * Track custom events
     */
    trackCustomEvent(eventName, eventData = {}) {
        this.sendClientEvent(eventName, eventData);
        this.sendServerEvent(eventName, eventData);
    }

    /**
     * Initialize tracking on page load
     */
    init() {
        if (!this.isEnabled) {
            console.log('Facebook tracking disabled');
            return;
        }

        console.log('Facebook tracking initialized');

        // Track page view
        this.sendClientEvent('PageView');

        // Set up enhanced e-commerce tracking if enabled
        if (this.enhancedEcommerce) {
            this.setupEnhancedEcommerce();
        }
    }

    /**
     * Setup enhanced e-commerce tracking
     */
    setupEnhancedEcommerce() {
        // Track product views
        const productElements = document.querySelectorAll('[data-product-id]');
        productElements.forEach(element => {
            element.addEventListener('click', (e) => {
                const productId = element.dataset.productId;
                const productName = element.dataset.productName;
                const productPrice = element.dataset.productPrice;
                const productCategory = element.dataset.productCategory;

                this.trackViewContent({
                    product_id: productId,
                    name: productName,
                    price: productPrice,
                    category: productCategory
                });
            });
        });

        // Track add to cart
        const addToCartButtons = document.querySelectorAll('[data-add-to-cart]');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const productId = button.dataset.productId;
                const productName = button.dataset.productName;
                const productPrice = button.dataset.productPrice;
                const quantity = button.dataset.quantity || 1;

                this.trackAddToCart({
                    product_id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: quantity
                });
            });
        });
    }
}

// Initialize Facebook tracking when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    window.facebookTracking = new FacebookTracking();
    window.facebookTracking.init();
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = FacebookTracking;
}
