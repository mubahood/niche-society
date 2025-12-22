<?php
/**
 * Database Configuration
 * Niche Society Website
 * 
 * MySQL connection settings for MAMP environment
 */

// Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'niche_society');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8mb4');
define('DB_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock');

// Create PDO connection
try {
    $dsn = "mysql:unix_socket=" . DB_SOCKET . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    error_log("Database Connection Error: " . $e->getMessage());
    die("Database connection failed. Please check your configuration.");
}

return $pdo;
