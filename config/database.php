<?php
/**
 * Database Configuration
 * Niche Society Website
 * 
 * MySQL connection settings with environment detection
 */

// Database credentials - UPDATE THESE FOR PRODUCTION
define('DB_HOST', 'localhost');
define('DB_NAME', 'niche_society');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8mb4');

// MAMP socket path (only for local development)
define('DB_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock');

// Detect environment
$isLocal = (strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false) || 
           (strpos($_SERVER['HTTP_HOST'] ?? '', '127.0.0.1') !== false);

// Create PDO connection
try {
    // Use socket for local MAMP, standard host:port for production
    if ($isLocal && file_exists(DB_SOCKET)) {
        $dsn = "mysql:unix_socket=" . DB_SOCKET . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    } else {
        // Production connection (no socket)
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    }
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    // Log error with more details
    $errorMsg = "Database Connection Error: " . $e->getMessage();
    $errorMsg .= "\nHost: " . DB_HOST;
    $errorMsg .= "\nDatabase: " . DB_NAME;
    $errorMsg .= "\nUser: " . DB_USER;
    $errorMsg .= "\nEnvironment: " . ($isLocal ? 'Local' : 'Production');
    error_log($errorMsg);
    
    // Show user-friendly error
    if (!$isLocal) {
        die("Database connection failed. Please update database credentials in config/database.php on the server.");
    } else {
        die("Database connection failed. Error: " . $e->getMessage());
    }
}

return $pdo;
