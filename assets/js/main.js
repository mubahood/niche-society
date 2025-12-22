/**
 * Main JavaScript
 * Niche Society Website - Advanced Interactive Header
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // HIDE TOP BAR ON SCROLL
    // ========================================
    
    let lastScrollTop = 0;
    const topBar = document.querySelector('.top-bar');
    const navbar = document.querySelector('.navbar.sticky-top');
    const scrollThreshold = 100;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > scrollThreshold) {
            if (scrollTop > lastScrollTop) {
                // Scrolling down - hide top bar
                topBar.classList.add('hidden');
                navbar.classList.add('top-bar-hidden');
                document.body.classList.add('top-bar-hidden');
            } else {
                // Scrolling up - show top bar
                topBar.classList.remove('hidden');
                navbar.classList.remove('top-bar-hidden');
                document.body.classList.remove('top-bar-hidden');
            }
        } else {
            // At top of page - always show
            topBar.classList.remove('hidden');
            navbar.classList.remove('top-bar-hidden');
            document.body.classList.remove('top-bar-hidden');
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
    
    // ========================================
    // ADVANCED TOP BAR INTERACTIONS
    // ========================================
    
    // Social icons smooth hover with enhanced effects
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach((icon) => {
        icon.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#FFF7E7';
            this.style.color = '#602234';
            this.style.borderColor = '#602234';
        });
        icon.addEventListener('mouseleave', function() {
            this.style.backgroundColor = 'transparent';
            this.style.color = '#FFF7E7';
            this.style.borderColor = '#FFF7E7';
        });
    });
    
    // Language switcher smooth transitions
    const langLinks = document.querySelectorAll('.lang-link');
    langLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateY(-2px)';
                this.style.opacity = '0.8';
            }
        });
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.opacity = '1';
        });
    });
    
    // ========================================
    // ADVANCED NAVBAR INTERACTIONS
    // ========================================
    
    // Logo magnetic effect
    const navbarBrand = document.querySelector('.navbar-brand');
    if (navbarBrand) {
        navbarBrand.style.position = 'relative';
        navbarBrand.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.filter = 'brightness(1.1)';
        });
        navbarBrand.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.filter = 'brightness(1)';
        });
    }
    
    // Nav links with magnetic cursor effect
    const navLinksEnhanced = document.querySelectorAll('.nav-link-enhanced');
    navLinksEnhanced.forEach(link => {
        link.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            this.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translate(0, 0)';
        });
        
        // Ripple effect on click
        link.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                background: radial-gradient(circle, rgba(96, 34, 52, 0.3) 0%, transparent 70%);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Dropdown auto-show with smooth animations
    const dropdownItems = document.querySelectorAll('.nav-item.dropdown');
    dropdownItems.forEach(item => {
        const toggle = item.querySelector('.dropdown-toggle');
        const menu = item.querySelector('.dropdown-menu');
        let hideTimeout;
        
        item.addEventListener('mouseenter', function() {
            clearTimeout(hideTimeout);
            menu.classList.add('show');
            menu.style.display = 'block';
            toggle.style.backgroundColor = 'rgba(96, 34, 52, 0.08)';
            toggle.style.transform = 'translateY(-2px)';
        });
        
        item.addEventListener('mouseleave', function() {
            hideTimeout = setTimeout(() => {
                menu.classList.remove('show');
                menu.style.display = 'none';
                toggle.style.backgroundColor = 'transparent';
                toggle.style.transform = 'translateY(0)';
            }, 200);
        });
    });
    
    // Dropdown items with hover effect only
    const dropdownMenuItems = document.querySelectorAll('.dropdown-item');
    dropdownMenuItems.forEach((item) => {
        item.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#FFF7E7';
            this.style.paddingLeft = '20px';
            this.style.fontWeight = '600';
        });
        item.addEventListener('mouseleave', function() {
            this.style.backgroundColor = 'transparent';
            this.style.paddingLeft = '16px';
            this.style.fontWeight = '400';
        });
    });
    
    // CTA Button hover effect
    const ctaBtn = document.querySelector('.btn-cta-enhanced');
    if (ctaBtn) {
        ctaBtn.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#4a1a29';
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });
        ctaBtn.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '#602234';
            this.style.transform = 'translateY(0) scale(1)';
        });
    }
    
    // ========================================
    // SMOOTH SCROLL WITH PROGRESS INDICATOR
    // ========================================
    
    // Add scroll progress bar
    const progressBar = document.createElement('div');
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #602234, #7A2E44);
        z-index: 9999;
        transition: width 0.1s ease;
    `;
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', function() {
        const scrollPercent = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        progressBar.style.width = scrollPercent + '%';
    });
    
    // ========================================
    // NAVBAR SCROLL EFFECTS
    // ========================================
    
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.boxShadow = '0 4px 20px rgba(96, 34, 52, 0.15)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.05)';
        }
    });
    
    // Add ripple animation styles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to { transform: scale(4); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
    
    // ========================================
    // BACK TO TOP BUTTON
    // ========================================
    const backToTopButton = document.getElementById('backToTop');
    
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // ========================================
    // NAVBAR BACKGROUND ON SCROLL (removed duplicate)
    // ========================================
    // Already handled in the advanced navbar section above
    
    // ========================================
    // NAVBAR TOGGLE (Mobile Menu) with Animation
    // ========================================
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function() {
            this.classList.toggle('active');
            navbarCollapse.classList.toggle('show');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
                navbarToggler.classList.remove('active');
                navbarCollapse.classList.remove('show');
            }
        });
        
        // Close menu when clicking on a nav link
        const navLinks = navbarCollapse.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    navbarToggler.classList.remove('active');
                    navbarCollapse.classList.remove('show');
                }
            });
        });
    }
    
    // ========================================
    // DROPDOWN TOGGLE (Mobile)
    // ========================================
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                const menu = this.nextElementSibling;
                if (menu && menu.classList.contains('dropdown-menu')) {
                    menu.classList.toggle('show');
                }
            }
        });
    });
    
    // ========================================
    // LANGUAGE SWITCHER
    // ========================================
    const languageSwitcher = document.querySelectorAll('.language-switcher a');
    
    languageSwitcher.forEach(link => {
        link.addEventListener('click', function(e) {
            // Show loading indicator
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('lang', this.getAttribute('href').replace('?lang=', ''));
            window.location.href = currentUrl.toString();
        });
    });
    
    // ========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            if (href === '#' || href === '') return;
            
            e.preventDefault();
            
            const target = document.querySelector(href);
            
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ========================================
    // FORM VALIDATION
    // ========================================
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // ========================================
    // CONTACT FORM SUBMISSION
    // ========================================
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!contactForm.checkValidity()) {
                contactForm.classList.add('was-validated');
                return;
            }
            
            const formData = new FormData(contactForm);
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="bi bi-hourglass-split"></i> جاري الإرسال...';
            
            // Send form data via AJAX
            fetch('process-contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', data.message);
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                } else {
                    showAlert('danger', data.message);
                }
            })
            .catch(error => {
                showAlert('danger', 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.');
                console.error('Error:', error);
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            });
        });
    }
    
    // ========================================
    // SHOW ALERT MESSAGE
    // ========================================
    function showAlert(type, message) {
        const alertHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        
        const alertContainer = document.getElementById('alertContainer');
        if (alertContainer) {
            alertContainer.innerHTML = alertHTML;
            
            // Auto-dismiss after 5 seconds
            setTimeout(() => {
                const alert = alertContainer.querySelector('.alert');
                if (alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            }, 5000);
        }
    }
    
    // ========================================
    // LAZY LOADING IMAGES
    // ========================================
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
    
    // ========================================
    // ANIMATION ON SCROLL (Simple Version)
    // ========================================
    const animatedElements = document.querySelectorAll('[data-aos]');
    
    const animationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, {
        threshold: 0.1
    });
    
    animatedElements.forEach(el => animationObserver.observe(el));
    
    // ========================================
    // MOBILE MENU CLOSE ON LINK CLICK
    // ========================================
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992 && navbarCollapse && navbarCollapse.classList.contains('show')) {
                if (navbarToggler) navbarToggler.click();
            }
        });
    });
    
    // ========================================
    // TYPING EFFECT FOR HERO TEXT (Optional)
    // ========================================
    const typingElement = document.querySelector('[data-typing]');
    
    if (typingElement) {
        const text = typingElement.getAttribute('data-typing');
        let index = 0;
        typingElement.textContent = '';
        
        function type() {
            if (index < text.length) {
                typingElement.textContent += text.charAt(index);
                index++;
                setTimeout(type, 100);
            }
        }
        
        setTimeout(type, 500);
    }
    
    // ========================================
    // COUNTER ANIMATION
    // ========================================
    const counters = document.querySelectorAll('.stat-box h3');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = parseInt(target.textContent);
                let currentValue = 0;
                const increment = finalValue / 50; // Adjust speed
                
                const timer = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= finalValue) {
                        target.textContent = finalValue + '+';
                        clearInterval(timer);
                    } else {
                        target.textContent = Math.floor(currentValue) + '+';
                    }
                }, 30);
                
                counterObserver.unobserve(target);
            }
        });
    });
    
    counters.forEach(counter => counterObserver.observe(counter));
    
    // ========================================
    // PREVENT CSRF ATTACKS - ADD TOKEN TO FORMS
    // ========================================
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    
    if (csrfToken) {
        const token = csrfToken.getAttribute('content');
        
        document.querySelectorAll('form').forEach(form => {
            if (!form.querySelector('input[name="csrf_token"]')) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'csrf_token';
                input.value = token;
                form.appendChild(input);
            }
        });
    }
    
    // ========================================
    // SERVICE CARDS EQUAL HEIGHT
    // ========================================
    function equalizeCardHeights() {
        const cards = document.querySelectorAll('.service-card');
        let maxHeight = 0;
        
        // Reset heights
        cards.forEach(card => {
            card.style.height = 'auto';
        });
        
        // Find max height
        cards.forEach(card => {
            const cardHeight = card.offsetHeight;
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });
        
        // Set all cards to max height
        cards.forEach(card => {
            card.style.height = maxHeight + 'px';
        });
    }
    
    // Run on load and resize
    if (window.innerWidth > 768) {
        equalizeCardHeights();
        window.addEventListener('resize', equalizeCardHeights);
    }
    
});

// ========================================
// UTILITY FUNCTIONS
// ========================================

/**
 * Format number with thousands separator
 */
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

/**
 * Get cookie value
 */
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

/**
 * Set cookie
 */
function setCookie(name, value, days) {
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';
}

/**
 * Debounce function
 */
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

// ========================================
// FOOTER INTERACTIONS
// ========================================

// Animate footer elements on scroll into view
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const footerObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe footer elements
document.addEventListener('DOMContentLoaded', function() {
    const footerElements = document.querySelectorAll('.footer-corporate .col-lg-4, .footer-corporate .col-lg-2, .footer-corporate .col-lg-3');
    
    footerElements.forEach(function(element, index) {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease ' + (index * 0.1) + 's, transform 0.6s ease ' + (index * 0.1) + 's';
        footerObserver.observe(element);
    });
    
    // Footer links hover effect enhancement
    const footerLinks = document.querySelectorAll('.footer-links-list a, .footer-contact-list li');
    footerLinks.forEach(function(link) {
        link.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
        });
    });
    
    // Social links ripple effect
    const socialLinks = document.querySelectorAll('.footer-social-link');
    socialLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('social-ripple');
            
            this.appendChild(ripple);
            
            setTimeout(function() {
                ripple.remove();
            }, 600);
        });
    });
});

// Add ripple effect CSS
const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
    .footer-social-link {
        position: relative;
        overflow: hidden;
    }
    
    .social-ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 247, 231, 0.4);
        transform: scale(0);
        animation: ripple-animation 0.6s ease-out;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyle);
