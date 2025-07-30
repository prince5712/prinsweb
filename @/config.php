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
// Assumes this file is in the root (e.g., /prinsweb/config.php)
$lang_file_path = __DIR__ . "/lang/lang_{$selected_lang}.php";

// Include the language file only if it exists
// The language files now use if(!defined()) to prevent redefinition
if (file_exists($lang_file_path)) {
    include $lang_file_path;
}

// --- Fallback Constants (Define Only If Not Already Defined) ---
// This prevents "Constant already defined" errors
if (!defined('LANG_CODE')) define('LANG_CODE', 'en');
if (!defined('LANG_NAME')) define('LANG_NAME', 'English');
if (!defined('TXT_HOME')) define('TXT_HOME', 'Home');
if (!defined('TXT_ABOUT')) define('TXT_ABOUT', 'About');
if (!defined('TXT_CONTACT')) define('TXT_CONTACT', 'Contact');
if (!defined('TXT_WELCOME')) define('TXT_WELCOME', 'Welcome');
if (!defined('TXT_SPLASH_MESSAGE')) define('TXT_SPLASH_MESSAGE', 'Loading...');
if (!defined('TXT_OFFLINE_MESSAGE')) define('TXT_OFFLINE_MESSAGE', 'No Internet Connection');
if (!defined('TXT_THEME_AUTO')) define('TXT_THEME_AUTO', 'Auto');
if (!defined('TXT_THEME_LIGHT')) define('TXT_THEME_LIGHT', 'Light');
if (!defined('TXT_THEME_DARK')) define('TXT_THEME_DARK', 'Dark');
if (!defined('TXT_SITE_DESCRIPTION')) define('TXT_SITE_DESCRIPTION', 'This is a sample website built with PHP, Bootstrap 5, and modern features.');
if (!defined('TXT_ABOUT_CONTENT')) define('TXT_ABOUT_CONTENT', 'This is the about page. Learn more about us here.');
if (!defined('TXT_CONTACT_CONTENT')) define('TXT_CONTACT_CONTENT', 'This is the contact page. Get in touch with us.');
if (!defined('TXT_LANGUAGE')) define('TXT_LANGUAGE', 'Language');
if (!defined('TXT_THEME')) define('TXT_THEME', 'Theme');

// --- Site Configuration ---
define('SITE_NAME', 'Prinsweb');
// Optional: Use relative base URL
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/');
define('ROOT_PATH', __DIR__);

?>