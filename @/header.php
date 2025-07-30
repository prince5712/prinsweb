<?php
// @/header.php
// Include configuration
$config_path = __DIR__ . '/config.php';
if (file_exists($config_path)) {
    include $config_path;
} else {
    http_response_code(500);
    die('Error: Configuration file not found. Please check your installation.');
}

// Fallback for critical constants
if (!defined('LANG_CODE')) define('LANG_CODE', 'en');
if (!defined('TXT_HOME')) define('TXT_HOME', 'Home');
if (!defined('TXT_ABOUT')) define('TXT_ABOUT', 'About');
if (!defined('TXT_CONTACT')) define('TXT_CONTACT', 'Contact');
if (!defined('TXT_LANGUAGE')) define('TXT_LANGUAGE', 'Language');
if (!defined('TXT_THEME')) define('TXT_THEME', 'Theme');
if (!defined('SITE_NAME')) define('SITE_NAME', 'Prinsweb');
?>

<!DOCTYPE html>
<html lang="<?php echo LANG_CODE; ?>" data-bs-theme="auto">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo htmlspecialchars(SITE_NAME); ?></title>

    <!-- Bootstrap 5.3.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/custom.css">
    
    <!-- Preload critical JS -->
    <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Splash Screen -->
<div id="splash-screen" class="d-flex flex-column justify-content-center align-items-center">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden"><?php echo TXT_SPLASH_MESSAGE; ?></span>
    </div>
    <p class="mt-3 mb-0"><?php echo TXT_SPLASH_MESSAGE; ?></p>
</div>

<!-- Offline Page -->
<div id="offline-page" class="d-none flex-column justify-content-center align-items-center text-center">
    <i class="bi bi-wifi-off" style="font-size: 3rem;"></i>
    <h2 class="mt-3"><?php echo TXT_OFFLINE_MESSAGE; ?></h2>
    <p><?php echo TXT_OFFLINE_MESSAGE; ?></p>
</div>

<!-- Main Content Wrapper -->
<div id="main-content" class="flex-grow-1 d-none">

    <!-- Sticky Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand fw-bold text-primary" href="index.php">
                <?php echo htmlspecialchars(SITE_NAME); ?>
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="bi bi-house-door me-1"></i> <?php echo TXT_HOME; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="bi bi-info-circle me-1"></i> <?php echo TXT_ABOUT; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <i class="bi bi-envelope me-1"></i> <?php echo TXT_CONTACT; ?>
                        </a>
                    </li>
                </ul>

                <!-- Right Side: Language & Theme Controls -->
                <div class="d-flex gap-2">
                    <!-- Language Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe"></i> <?php echo TXT_LANGUAGE; ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                            <li><a class="dropdown-item" href="?lang=en">English</a></li>
                            <li><a class="dropdown-item" href="?lang=hi">हिंदी</a></li>
                        </ul>
                    </div>

                    <!-- Theme Toggle Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                id="themeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                title="Auto (System)">
                            <i class="bi bi-circle-half"></i> <?php echo TXT_THEME; ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-theme-value="auto">
                                    <i class="bi bi-circle-half me-1"></i> <?php echo TXT_THEME_AUTO; ?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-theme-value="light">
                                    <i class="bi bi-sun me-1"></i> <?php echo TXT_THEME_LIGHT; ?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-theme-value="dark">
                                    <i class="bi bi-moon me-1"></i> <?php echo TXT_THEME_DARK; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content Container -->
    <main class="container-fluid flex-grow-1 py-4">