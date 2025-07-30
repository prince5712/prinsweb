<?php
// @/header.php

// Define the path to the config file relative to this file's location
$config_path = __DIR__ . '/config.php';

// Check if the config file exists before including it
if (file_exists($config_path)) {
    include $config_path;
} else {
    // Handle the error gracefully if config is missing
    http_response_code(500); // Internal Server Error
    die('Error: Configuration file (@/config.php) not found. Please check your installation.');
}

// Ensure language constants are defined, even if config failed (fallback)
// Define fallbacks if not loaded by config/lang files
$fallbacks = [
    'LANG_CODE' => 'en',
    'TXT_HOME' => 'Home',
    'TXT_ABOUT' => 'About',
    'TXT_CONTACT' => 'Contact',
    'TXT_SPLASH_MESSAGE' => 'Loading...',
    'TXT_OFFLINE_MESSAGE' => 'No Internet Connection',
    'TXT_LANGUAGE' => 'Language',
    'TXT_THEME' => 'Theme',
    'TXT_THEME_AUTO' => 'Auto',
    'TXT_THEME_LIGHT' => 'Light',
    'TXT_THEME_DARK' => 'Dark',
    'SITE_NAME' => 'My Website',
];

foreach ($fallbacks as $constant => $value) {
    if (!defined($constant)) {
        define($constant, $value);
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo LANG_CODE; ?>" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Link to Custom CSS -->
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body class="d-flex flex-column vh-100"> <!-- Enable flexbox for sticky footer -->

<!-- Splash Screen -->
<div id="splash-screen">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden"><?php echo TXT_SPLASH_MESSAGE; ?></span>
    </div>
    <p class="mt-2"><?php echo TXT_SPLASH_MESSAGE; ?></p>
</div>

<!-- Offline Page -->
<div id="offline-page">
    <div class="text-center">
        <i class="bi bi-wifi-off" style="font-size: 3rem;"></i>
        <h2 class="mt-3"><?php echo TXT_OFFLINE_MESSAGE; ?></h2>
        <p>Please check your connection.</p>
    </div>
</div>

<!-- Main Content Wrapper (for sticky footer) -->
<div id="main-wrapper" class="flex-grow-1 d-flex flex-column"> <!-- Flex grow pushes footer down -->

    <!-- Fixed Top Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top"> <!-- Changed classes -->
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?php echo SITE_NAME; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" aria-current="page" href="index.php"><?php echo TXT_HOME; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>" href="about.php"><?php echo TXT_ABOUT; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="contact.php"><?php echo TXT_CONTACT; ?></a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <!-- Language Dropdown -->
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-light dropdown-toggle btn-sm" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-globe"></i> <?php echo TXT_LANGUAGE; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="langDropdown">
                                <li><a class="dropdown-item" href="?lang=en">English</a></li>
                                <li><a class="dropdown-item" href="?lang=hi">&#x939;&#x93F;&#x902;&#x926;&#x940;</a></li> <!-- Hindi -->
                                <!-- Add more languages -->
                            </ul>
                        </div>
                        <!-- Theme Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle btn-sm" type="button" id="themeDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Auto (System)">
                                <i class="bi bi-circle-half"></i> <?php echo TXT_THEME; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="themeDropdown">
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="auto"><i class="bi bi-circle-half"></i> <?php echo TXT_THEME_AUTO; ?></a></li>
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="light"><i class="bi bi-sun"></i> <?php echo TXT_THEME_LIGHT; ?></a></li>
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="dark"><i class="bi bi-moon"></i> <?php echo TXT_THEME_DARK; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Area (Initially Hidden, shown after splash) -->
    <main id="main-content" class="container-fluid my-4 flex-grow-1"> <!-- Added flex-grow-1 -->
