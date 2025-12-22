<?php
/**
 * Application Configuration
 * Niche Society Website
 */

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Site settings
define('SITE_NAME', 'Niche Society');
define('SITE_TAGLINE', 'نيش سوسايتي - خدمات الإدارة الفاخرة');
define('SITE_URL', 'http://localhost:8888/niche-society');
define('ASSETS_URL', SITE_URL . '/assets');

// Default language
define('DEFAULT_LANG', 'ar'); // Arabic primary

// Supported languages
define('SUPPORTED_LANGUAGES', ['ar', 'en']);

// Email configuration
define('CONTACT_EMAIL', 'info@niche-society.com');
define('ADMIN_EMAIL', 'admin@niche-society.com');

// File upload settings
define('UPLOAD_MAX_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx']);

// Security settings
define('ENABLE_CSRF_PROTECTION', true);
define('SESSION_TIMEOUT', 3600); // 1 hour

// Pagination
define('ITEMS_PER_PAGE', 10);

// Social media links
define('SOCIAL_FACEBOOK', 'https://facebook.com/nichesociety');
define('SOCIAL_TWITTER', 'https://twitter.com/nichesociety');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/nichesociety');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/nichesociety');

// Brand colors
define('BRAND_PRIMARY', '#602335'); // Burgundy
define('BRAND_SECONDARY', '#FFF6E7'); // Cream
define('BRAND_ACCENT', '#8B4A62'); // Light burgundy

// ISO certification
define('ISO_CERTIFICATE_NUMBER', '25EQQN01');
define('ISO_VALID_UNTIL', '2028-11-04');

// ============================================================
// EXTENDED CONFIGURATION
// ============================================================

// Additional Contact Information
define('CONTACT_PHONE', '+966532447976');
define('CONTACT_ADDRESS_AR', 'الرياض، المملكة العربية السعودية');
define('CONTACT_ADDRESS_EN', 'Riyadh, Saudi Arabia');

// Security Settings
define('CSRF_TOKEN_EXPIRY', 3600); // 1 hour
define('MAX_LOGIN_ATTEMPTS', 5);
define('RATE_LIMIT_PERIOD', 300); // 5 minutes
define('RATE_LIMIT_MAX_ATTEMPTS', 5);

// Pagination Settings
define('POSTS_PER_PAGE', 9);
define('TESTIMONIALS_PER_PAGE', 6);
define('SERVICES_PER_PAGE', 6);
define('CONTACTS_PER_PAGE', 50);

// File Upload Settings (for future use)
define('ALLOWED_IMAGE_TYPES_ARRAY', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('UPLOAD_PATH', dirname(__DIR__) . '/uploads');

// Email Settings
define('SMTP_ENABLED', false); // Set to true when SMTP is configured
define('SMTP_HOST', '');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', '');
define('SMTP_PASSWORD', '');

// Caching Settings
define('CACHE_ENABLED', false); // Enable for production performance
define('CACHE_DURATION', 3600); // 1 hour
define('CACHE_PATH', dirname(__DIR__) . '/cache');

// Debug & Logging
define('DEBUG_MODE', true); // CRITICAL: Set to false in production
define('LOG_PATH', dirname(__DIR__) . '/logs');
define('LOG_ERRORS', true);

// Session Settings
define('SESSION_LIFETIME', 86400); // 24 hours
define('SESSION_NAME', 'niche_society_session');

// Root Path (for includes)
define('ROOT_PATH', dirname(__DIR__));

// Error reporting (based on debug mode)
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', LOG_PATH . '/php-errors.log');
}

// Timezone
date_default_timezone_set('Asia/Riyadh');

// Include database connection
require_once __DIR__ . '/database.php';

