<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'portfolio_user');
define('DB_PASS', 'jacobombati4@gmail.com');
define('DB_NAME', 'jacob-portfolio');

// Establish database connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
?>