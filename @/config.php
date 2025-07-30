<?php
// @/config.php
// Start session if not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- Language Handling ---
$selected_lang = 'en'; // Default fallback

// 1. Check if language is manually selected via URL (?lang=xx)
if (isset($_GET['lang'])) {
    $requested_lang = strtolower(trim($_GET['lang']));
    $supported_langs = ['en', 'hi']; // Add more as needed

    if (in_array($requested_lang, $supported_langs)) {
        $_SESSION['lang'] = $requested_lang;
    }
    
    // Redirect to remove ?lang=xx from URL (cleaner UX)
    $redirect_url = strtok($_SERVER['REQUEST_URI'], '?');
    header("Location: $redirect_url");
    exit();
}

// 2. Use session language if set
if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['en', 'hi'])) {
    $selected_lang = $_SESSION['lang'];
} else {
    // 3. Auto-detect browser language (fallback to 'en')
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
    $selected_lang = in_array($browser_lang, ['en', 'hi']) ? $browser_lang : 'en';
    $_SESSION['lang'] = $selected_lang;
}

// Define path to language file
$lang_file_path = dirname(__DIR__) . "/lang/lang_{$selected_lang}.php"; // Adjust path based on your root

// Fallback constants in case file is missing
define('LANG_CODE', 'en');
define('LANG_NAME', 'English');
define('TXT_HOME', 'Home');
define('TXT_ABOUT', 'About');
define('TXT_CONTACT', 'Contact');
define('TXT_WELCOME', 'Welcome');
define('TXT_SPLASH_MESSAGE', 'Loading...');
define('TXT_OFFLINE_MESSAGE', 'No Internet Connection');
define('TXT_THEME_AUTO', 'Auto');
define('TXT_THEME_LIGHT', 'Light');
define('TXT_THEME_DARK', 'Dark');
define('TXT_SITE_DESCRIPTION', 'This is a sample website built with PHP, Bootstrap 5, and modern features.');
define('TXT_ABOUT_CONTENT', 'This is the about page. Learn more about us here.');
define('TXT_CONTACT_CONTENT', 'This is the contact page. Get in touch with us.');
define('TXT_LANGUAGE', 'Language');
define('TXT_THEME', 'Theme');

// Include language file if exists
if (file_exists($lang_file_path)) {
    include $lang_file_path;
}

// --- Site Configuration ---
define('SITE_NAME', 'Prinsweb');
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/');
define('ROOT_PATH', dirname(__FILE__));

?>