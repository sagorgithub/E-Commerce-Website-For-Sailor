// Modern Product Interactions JavaScript

document.addEventListener('DOMContentLoaded', function() {
    
    // Modern Intersection Observer for lazy loading
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '50px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('loaded');
                // Add fade-in animation
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all product cards
    document.querySelectorAll('.modern-product-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Modern Wishlist functionality
    document.querySelectorAll('.modern-wishlist-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Add animation
            this.style.transform = 'scale(1.2)';
            this.style.color = '#e74c3c';
            
            // Add to wishlist logic here
            console.log('Added to wishlist');
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });
    });

    // Modern Quick View functionality
    document.querySelectorAll('.modern-quick-view').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Add your quick view modal logic here
            console.log('Quick view clicked');
            
            // Example: Show a simple alert for now
            alert('Quick view feature coming soon!');
        });
    });

    // Modern Add to Cart animation
    document.querySelectorAll('.modern-product-actions .btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });

    // Modern Image Hover Effects
    document.querySelectorAll('.modern-product-image').forEach(imageContainer => {
        const images = imageContainer.querySelectorAll('img');
        if (images.length > 1) {
            const mainImage = images[0];
            const hoverImage = images[1];
            
            imageContainer.addEventListener('mouseenter', function() {
                if (hoverImage) {
                    hoverImage.style.opacity = '1';
                }
            });
            
            imageContainer.addEventListener('mouseleave', function() {
                if (hoverImage) {
                    hoverImage.style.opacity = '0';
                }
            });
        }
    });

    // Modern Price Animation
    document.querySelectorAll('.modern-price').forEach(priceContainer => {
        const priceElements = priceContainer.querySelectorAll('ins, del');
        priceElements.forEach(element => {
            element.style.transition = 'all 0.3s ease';
        });
    });

    // Modern Discount Badge Animation
    document.querySelectorAll('.modern-discount-badge').forEach(badge => {
        badge.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        
        badge.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Modern Loading States
    function showLoadingState(button) {
        const originalText = button.textContent;
        button.textContent = 'Loading...';
        button.disabled = true;
        button.style.opacity = '0.7';
        
        return function() {
            button.textContent = originalText;
            button.disabled = false;
            button.style.opacity = '1';
        };
    }

    // Modern Form Submissions
    document.querySelectorAll('.modern-product-actions form').forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            if (submitButton && !submitButton.disabled) {
                const resetLoading = showLoadingState(submitButton);
                
                // Simulate loading (remove this in production)
                setTimeout(() => {
                    resetLoading();
                }, 1000);
            }
        });
    });

    // Modern Scroll Animations
    function animateOnScroll() {
        const elements = document.querySelectorAll('.modern-product-card, .modern-section-title');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('animate-in');
            }
        });
    }

    // Add scroll event listener
    window.addEventListener('scroll', animateOnScroll);
    
    // Initial animation check
    animateOnScroll();

    // Modern Touch Interactions for Mobile
    let touchStartY = 0;
    let touchEndY = 0;

    document.addEventListener('touchstart', function(e) {
        touchStartY = e.changedTouches[0].screenY;
    });

    document.addEventListener('touchend', function(e) {
        touchEndY = e.changedTouches[0].screenY;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartY - touchEndY;
        
        if (Math.abs(diff) > swipeThreshold) {
            // Handle swipe gesture
            console.log('Swipe detected:', diff > 0 ? 'up' : 'down');
        }
    }

    // Modern Accessibility Features
    document.querySelectorAll('.modern-product-card').forEach(card => {
        card.setAttribute('tabindex', '0');
        
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const link = this.querySelector('a[href]');
                if (link) {
                    link.click();
                }
            }
        });
    });

    // Modern Performance Optimization
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Debounced scroll handler
    const debouncedScrollHandler = debounce(animateOnScroll, 10);
    window.addEventListener('scroll', debouncedScrollHandler);

    // Modern Error Handling
    window.addEventListener('error', function(e) {
        console.error('Product interaction error:', e.error);
    });

    // Modern Console Logging
    console.log('Modern Product Interactions Loaded Successfully!');
    console.log('Features: Lazy Loading, Hover Effects, Touch Support, Accessibility');
});

// Modern CSS Animation Classes
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        animation: fadeInUp 0.6s ease forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .modern-product-card.loaded {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    
    .modern-wishlist-btn:active {
        transform: scale(0.9) !important;
    }
    
    .modern-add-to-cart:active {
        transform: scale(0.95) !important;
    }
    
    .modern-discount-badge {
        transition: transform 0.3s ease;
    }
    
    .modern-product-image img {
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .modern-product-card:hover .modern-product-image img {
        transform: scale(1.08);
    }
`;

document.head.appendChild(style);
