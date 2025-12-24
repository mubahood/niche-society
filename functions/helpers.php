<?php
/**
 * Helper Functions
 * Niche Society Website
 */

/**
 * Get current language from session or default
 */
function getCurrentLang() {
    return $_SESSION['lang'] ?? DEFAULT_LANG;
}

/**
 * Alias for getCurrentLang() - for backward compatibility
 */
function getCurrentLanguage() {
    return getCurrentLang();
}

/**
 * Get text direction based on language
 */
function getTextDirection($lang = null) {
    $lang = $lang ?? getCurrentLang();
    return $lang === 'ar' ? 'rtl' : 'ltr';
}

/**
 * Get all translations for a language
 */
function getTranslations($lang = null) {
    return loadTranslations($lang);
}

/**
 * Set current language
 */
function setLanguage($lang) {
    if (in_array($lang, SUPPORTED_LANGUAGES)) {
        $_SESSION['lang'] = $lang;
        return true;
    }
    return false;
}

/**
 * Load translation file
 */
function loadTranslations($lang = null) {
    $lang = $lang ?? getCurrentLang();
    $file = __DIR__ . "/../lang/{$lang}.json";
    
    if (file_exists($file)) {
        $json = file_get_contents($file);
        return json_decode($json, true);
    }
    
    return [];
}

/**
 * Get translated text
 */
function t($key, $default = '') {
    static $translations = null;
    
    if ($translations === null) {
        $translations = loadTranslations();
    }
    
    return $translations[$key] ?? $default;
}

/**
 * Sanitize input data
 */
function sanitize($data) {
    if (is_array($data)) {
        return array_map('sanitize', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Generate CSRF token
 */
function generateCsrfToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 */
function verifyCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Redirect to URL
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Get current page URL
 */
function getCurrentUrl() {
    return $_SERVER['REQUEST_URI'];
}

/**
 * Generate full URL for a given path
 */
function url($path = '') {
    if (empty($path)) {
        return SITE_URL;
    }
    // Remove leading slash if present
    $path = ltrim($path, '/');
    return SITE_URL . '/' . $path;
}

/**
 * Check if current page is active
 */
function isActive($page) {
    $current = basename($_SERVER['PHP_SELF']);
    return ($current === $page) ? 'active' : '';
}

/**
 * Format date in Arabic or English
 */
function formatDate($date, $format = 'Y-m-d') {
    $lang = getCurrentLang();
    $timestamp = strtotime($date);
    
    if ($lang === 'ar') {
        // Arabic date formatting
        $months_ar = [
            1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل',
            5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس',
            9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
        ];
        $day = date('d', $timestamp);
        $month = $months_ar[date('n', $timestamp)];
        $year = date('Y', $timestamp);
        return "$day $month $year";
    }
    
    return date($format, $timestamp);
}

/**
 * Send email
 */
function sendEmail($to, $subject, $message, $from = CONTACT_EMAIL) {
    $headers = [
        'From' => $from,
        'Reply-To' => $from,
        'Content-Type' => 'text/html; charset=UTF-8',
        'X-Mailer' => 'PHP/' . phpversion()
    ];
    
    $headerString = '';
    foreach ($headers as $key => $value) {
        $headerString .= "$key: $value\r\n";
    }
    
    return mail($to, $subject, $message, $headerString);
}

/**
 * Generate meta tags
 */
function generateMetaTags($title, $description, $keywords = '', $image = '') {
    $lang = getCurrentLang();
    $title = sanitize($title);
    $description = sanitize($description);
    
    echo "<title>$title - " . SITE_NAME . "</title>\n";
    echo "<meta name='description' content='$description'>\n";
    
    if ($keywords) {
        echo "<meta name='keywords' content='" . sanitize($keywords) . "'>\n";
    }
    
    // Open Graph
    echo "<meta property='og:title' content='$title'>\n";
    echo "<meta property='og:description' content='$description'>\n";
    echo "<meta property='og:type' content='website'>\n";
    echo "<meta property='og:url' content='" . SITE_URL . getCurrentUrl() . "'>\n";
    
    if ($image) {
        echo "<meta property='og:image' content='" . ASSETS_URL . "/images/$image'>\n";
    }
    
    // Twitter Card
    echo "<meta name='twitter:card' content='summary_large_image'>\n";
    echo "<meta name='twitter:title' content='$title'>\n";
    echo "<meta name='twitter:description' content='$description'>\n";
}

/**
 * Alias for generateMetaTags() - for backward compatibility
 */
function getMetaTags($title, $description, $url = '', $image = '') {
    generateMetaTags($title, $description, '', $image);
}

/**
 * Get file size in human readable format
 */
function humanFileSize($bytes, $decimals = 2) {
    $size = ['B', 'KB', 'MB', 'GB', 'TB'];
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . $size[$factor];
}

/**
 * Truncate text
 */
function truncate($text, $length = 150, $suffix = '...') {
    if (mb_strlen($text) <= $length) {
        return $text;
    }
    return mb_substr($text, 0, $length) . $suffix;
}

/**
 * Check if user is admin
 */
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

/**
 * Require admin access
 */
function requireAdmin() {
    if (!isAdmin()) {
        redirect(SITE_URL . '/login.php');
    }
}

// ============================================================
// LOAD EXTENDED HELPER FUNCTIONS
// ============================================================

// Include extended helpers (database operations, form processing, email templates, etc.)
// This file contains additional helper functions for blog, testimonials, contact forms, etc.
if (file_exists(__DIR__ . '/helpers-extended.php')) {
    require_once __DIR__ . '/helpers-extended.php';
}

