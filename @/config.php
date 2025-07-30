<?php
// @/config.php

session_start();

// --- Language Handling ---
// 1. Check if language is manually selected via URL (?lang=xx)
if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    $_SESSION['lang'] = $selected_lang;
    // Redirect to remove ?lang=xx from URL for cleaner look
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

// 2. Check if language is stored in session
if (isset($_SESSION['lang']) && !empty($_SESSION['lang'])) {
    $selected_lang = $_SESSION['lang'];
} else {
    // 3. Auto-detect browser language (fallback to 'en')
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $supported_langs = ['en', 'hi']; // Add more as needed
    $selected_lang = in_array($browser_lang, $supported_langs) ? $browser_lang : 'en';
    $_SESSION['lang'] = $selected_lang;
}

// Include the appropriate language file
$lang_file_path = __DIR__ . "/../lang/lang_" . $selected_lang . ".php";
if (file_exists($lang_file_path)) {
    include $lang_file_path;
} else {
    // Fallback if specific lang file is missing
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
    // Define other necessary TXT_ constants with English defaults
    // ... (add more defaults as needed for all text used)
}

// --- Site Configuration ---
define('SITE_NAME', 'Prinsweb');
define('BASE_URL', 'http://localhost/prinsweb/'); // Adjust to your actual URL or your-project-name

?>