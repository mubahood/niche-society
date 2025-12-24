<?php
/**
 * Contact Page - Niche Society
 * 
 * Contact form with validation, email notifications,
 * database storage, and security measures
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/functions/helpers.php';

// Start session for CSRF token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$lang = getCurrentLanguage();
$t = getTranslations($lang);
$dir = getTextDirection($lang);

$pageTitle = $lang === 'ar' ? 'تواصل معنا - نيتش سوسيتي' : 'Contact Us - Niche Society';
$pageDescription = $lang === 'ar' 
    ? 'تواصل معنا للحصول على استشارة مجانية حول خدماتنا في إدارة المنازل والفعاليات' 
    : 'Contact us for a free consultation about our services in household and event management';

// Check for success or error messages from form submission
$successMessage = isset($_SESSION['contact_success']) ? $_SESSION['contact_success'] : '';
$errorMessage = isset($_SESSION['contact_error']) ? $_SESSION['contact_error'] : '';
unset($_SESSION['contact_success'], $_SESSION['contact_error']);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">
<head>
    <?= getMetaTags($pageTitle, $pageDescription, getCurrentUrl()) ?>
    <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
    <?php if ($lang === 'ar'): ?>
    <link rel="stylesheet" href="<?= url('assets/css/rtl.css') ?>">
    <?php endif; ?>
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero" style="background-image: linear-gradient(rgba(96, 34, 52, 0.7), rgba(96, 34, 52, 0.7)), url('<?= url('assets/images/contact-hero.jpg') ?>');">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title" data-aos="fade-up">
                    <?= $lang === 'ar' ? 'تواصل معنا' : 'Contact Us' ?>
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                    <?= $lang === 'ar' 
                        ? 'نحن هنا لمساعدتك. تواصل معنا اليوم للحصول على استشارة مجانية'
                        : 'We\'re here to help. Contact us today for a free consultation'
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information & Form -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="section-title">
                        <?= $lang === 'ar' ? 'معلومات التواصل' : 'Get In Touch' ?>
                    </h2>
                    <div class="divider"></div>
                    <p class="lead-text">
                        <?= $lang === 'ar'
                            ? 'نحن متواجدون دائماً للإجابة على استفساراتكم وتقديم الدعم اللازم'
                            : 'We\'re always available to answer your questions and provide the support you need'
                        ?>
                    </p>

                    <div class="contact-info-list">
                        <!-- Email -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?= $lang === 'ar' ? 'البريد الإلكتروني' : 'Email' ?></h4>
                                <a href="mailto:info@niche-society.com">info@niche-society.com</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?= $lang === 'ar' ? 'الهاتف' : 'Phone' ?></h4>
                                <a href="tel:+966532447976" dir="ltr">+966 532 447 976</a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?= $lang === 'ar' ? 'الموقع' : 'Location' ?></h4>
                                <p><?= $lang === 'ar' ? 'الرياض، المملكة العربية السعودية' : 'Riyadh, Saudi Arabia' ?></p>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?= $lang === 'ar' ? 'ساعات العمل' : 'Business Hours' ?></h4>
                                <p><?= $lang === 'ar' ? 'الأحد - الخميس: 9:00 ص - 6:00 م' : 'Sunday - Thursday: 9:00 AM - 6:00 PM' ?></p>
                                <p class="text-muted"><?= $lang === 'ar' ? 'خدمة الطوارئ متاحة 24/7' : 'Emergency service available 24/7' ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-media-section mt-4">
                        <h4 class="mb-3"><?= $lang === 'ar' ? 'تابعنا على' : 'Follow Us' ?></h4>
                        <div class="social-icons-large">
                            <a href="https://linkedin.com/company/niche-society" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://facebook.com/nichesociety" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://twitter.com/nichesociety" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="https://instagram.com/nichesociety" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        <h3 class="form-title">
                            <?= $lang === 'ar' ? 'أرسل لنا رسالة' : 'Send Us a Message' ?>
                        </h3>
                        <p class="form-subtitle">
                            <?= $lang === 'ar'
                                ? 'املأ النموذج وسنتواصل معك في أقرب وقت ممكن'
                                : 'Fill out the form and we\'ll get back to you as soon as possible'
                            ?>
                        </p>

                        <?php if ($successMessage): ?>
                        <div class="alert alert-success" role="alert">
                            <i class="bi bi-check-circle"></i>
                            <?= htmlspecialchars($successMessage) ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($errorMessage): ?>
                        <div class="alert alert-danger" role="alert">
                            <i class="bi bi-exclamation-circle"></i>
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                        <?php endif; ?>

                        <form id="contactForm" action="<?= url('contact-handler.php') ?>" method="POST" novalidate>
                            <!-- CSRF Token -->
                            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                            <input type="hidden" name="lang" value="<?= $lang ?>">
                            
                            <!-- Honeypot for spam prevention -->
                            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">
                                        <?= $lang === 'ar' ? 'الاسم الكامل' : 'Full Name' ?> <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="name" 
                                        name="name" 
                                        required
                                        maxlength="100"
                                        placeholder="<?= $lang === 'ar' ? 'أدخل اسمك الكامل' : 'Enter your full name' ?>"
                                    >
                                    <div class="invalid-feedback">
                                        <?= $lang === 'ar' ? 'يرجى إدخال اسمك الكامل' : 'Please enter your full name' ?>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label">
                                        <?= $lang === 'ar' ? 'البريد الإلكتروني' : 'Email Address' ?> <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        class="form-control" 
                                        id="email" 
                                        name="email" 
                                        required
                                        maxlength="100"
                                        placeholder="<?= $lang === 'ar' ? 'example@email.com' : 'example@email.com' ?>"
                                    >
                                    <div class="invalid-feedback">
                                        <?= $lang === 'ar' ? 'يرجى إدخال بريد إلكتروني صحيح' : 'Please enter a valid email address' ?>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">
                                        <?= $lang === 'ar' ? 'رقم الهاتف' : 'Phone Number' ?> <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        id="phone" 
                                        name="phone" 
                                        required
                                        maxlength="20"
                                        placeholder="<?= $lang === 'ar' ? '+966 5XX XXX XXX' : '+966 5XX XXX XXX' ?>"
                                        dir="ltr"
                                    >
                                    <div class="invalid-feedback">
                                        <?= $lang === 'ar' ? 'يرجى إدخال رقم هاتف صحيح' : 'Please enter a valid phone number' ?>
                                    </div>
                                </div>

                                <!-- Service Interest -->
                                <div class="col-md-6 mb-4">
                                    <label for="service" class="form-label">
                                        <?= $lang === 'ar' ? 'الخدمة المهتم بها' : 'Service of Interest' ?>
                                    </label>
                                    <select class="form-control" id="service" name="service">
                                        <option value=""><?= $lang === 'ar' ? 'اختر الخدمة' : 'Select a service' ?></option>
                                        <option value="household"><?= $lang === 'ar' ? 'إدارة المنزل الذكية' : 'Smart Household Management' ?></option>
                                        <option value="property"><?= $lang === 'ar' ? 'إدارة الممتلكات' : 'Property Management' ?></option>
                                        <option value="events"><?= $lang === 'ar' ? 'تنظيم الفعاليات' : 'Event Management' ?></option>
                                        <option value="protocol"><?= $lang === 'ar' ? 'البروتوكول والإتيكيت' : 'Protocol & Etiquette' ?></option>
                                        <option value="vip"><?= $lang === 'ar' ? 'خدمة الكونسيرج VIP' : 'VIP Concierge Service' ?></option>
                                        <option value="staff"><?= $lang === 'ar' ? 'توظيف وتدريب الموظفين' : 'Staff Recruitment & Training' ?></option>
                                        <option value="consultation"><?= $lang === 'ar' ? 'استشارة عامة' : 'General Consultation' ?></option>
                                    </select>
                                </div>

                                <!-- Message -->
                                <div class="col-12 mb-4">
                                    <label for="message" class="form-label">
                                        <?= $lang === 'ar' ? 'رسالتك' : 'Your Message' ?> <span class="text-danger">*</span>
                                    </label>
                                    <textarea 
                                        class="form-control" 
                                        id="message" 
                                        name="message" 
                                        rows="6" 
                                        required
                                        maxlength="1000"
                                        placeholder="<?= $lang === 'ar' ? 'اكتب رسالتك هنا...' : 'Write your message here...' ?>"
                                    ></textarea>
                                    <div class="invalid-feedback">
                                        <?= $lang === 'ar' ? 'يرجى كتابة رسالتك' : 'Please write your message' ?>
                                    </div>
                                    <small class="form-text text-muted">
                                        <span id="charCount">0</span> / 1000 <?= $lang === 'ar' ? 'حرف' : 'characters' ?>
                                    </small>
                                </div>

                                <!-- Privacy Agreement -->
                                <div class="col-12 mb-4">
                                    <div class="form-check">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            id="privacy" 
                                            name="privacy" 
                                            required
                                        >
                                        <label class="form-check-label" for="privacy">
                                            <?= $lang === 'ar' 
                                                ? 'أوافق على <a href="privacy.php" target="_blank">سياسة الخصوصية</a> وشروط الاستخدام'
                                                : 'I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and Terms of Service'
                                            ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="invalid-feedback">
                                            <?= $lang === 'ar' ? 'يجب الموافقة على سياسة الخصوصية' : 'You must agree to the privacy policy' ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100" id="submitBtn">
                                        <span class="btn-text">
                                            <?= $lang === 'ar' ? 'إرسال الرسالة' : 'Send Message' ?>
                                        </span>
                                        <span class="btn-loading" style="display:none;">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            <?= $lang === 'ar' ? 'جاري الإرسال...' : 'Sending...' ?>
                                        </span>
                                        <i class="bi bi-<?= $dir === 'rtl' ? 'arrow-left' : 'arrow-right' ?> btn-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Contact Us -->
    <section class="section bg-cream">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'لماذا تتواصل معنا؟' : 'Why Contact Us?' ?></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'استشارة مجانية' : 'Free Consultation' ?></h4>
                        <p><?= $lang === 'ar' ? 'احصل على استشارة مجانية من خبرائنا' : 'Get a free consultation from our experts' ?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'رد سريع' : 'Quick Response' ?></h4>
                        <p><?= $lang === 'ar' ? 'نرد على استفساراتكم خلال 24 ساعة' : 'We respond to your inquiries within 24 hours' ?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'خصوصية تامة' : 'Complete Privacy' ?></h4>
                        <p><?= $lang === 'ar' ? 'جميع معلوماتك محمية بأعلى معايير الأمان' : 'All your information is protected with the highest security standards' ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Form validation and handling
        (function() {
            'use strict';
            
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const messageTextarea = document.getElementById('message');
            const charCount = document.getElementById('charCount');

            // Character counter
            messageTextarea.addEventListener('input', function() {
                charCount.textContent = this.value.length;
            });

            // Form submission
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Show loading state
                    submitBtn.disabled = true;
                    submitBtn.querySelector('.btn-text').style.display = 'none';
                    submitBtn.querySelector('.btn-loading').style.display = 'inline-block';
                    submitBtn.querySelector('.btn-icon').style.display = 'none';
                }
                
                form.classList.add('was-validated');
            }, false);

            // Email validation
            const emailInput = document.getElementById('email');
            emailInput.addEventListener('blur', function() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(this.value) && this.value !== '') {
                    this.setCustomValidity('Invalid email format');
                } else {
                    this.setCustomValidity('');
                }
            });

            // Phone validation
            const phoneInput = document.getElementById('phone');
            phoneInput.addEventListener('blur', function() {
                const phoneRegex = /^[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,4}[)]?[-\s\.]?[0-9]{1,9}$/;
                if (!phoneRegex.test(this.value) && this.value !== '') {
                    this.setCustomValidity('Invalid phone number format');
                } else {
                    this.setCustomValidity('');
                }
            });
        })();
    </script>
    <script src="<?= url('assets/js/main.js') ?>"></script>
</body>
</html>
