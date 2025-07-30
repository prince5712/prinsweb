<?php
$config_path = __DIR__ . '/config.php';
if (file_exists($config_path)) {
    include $config_path;
} else {
    http_response_code(500);
    die('Error: Configuration file (@/config.php) not found. Please check your installation.');
}
if (!defined('LANG_CODE')) { define('LANG_CODE', 'en'); }
if (!defined('TXT_HOME')) { define('TXT_HOME', 'Home'); }
if (!defined('TXT_ABOUT')) { define('TXT_ABOUT', 'About'); }
if (!defined('TXT_CONTACT')) { define('TXT_CONTACT', 'Contact'); }
if (!defined('TXT_SPLASH_MESSAGE')) { define('TXT_SPLASH_MESSAGE', 'Loading...'); }
if (!defined('TXT_OFFLINE_MESSAGE')) { define('TXT_OFFLINE_MESSAGE', 'No Internet Connection'); }
if (!defined('TXT_LANGUAGE')) { define('TXT_LANGUAGE', 'Language'); }
if (!defined('TXT_THEME')) { define('TXT_THEME', 'Theme'); }
if (!defined('TXT_THEME_AUTO')) { define('TXT_THEME_AUTO', 'Auto'); }
if (!defined('TXT_THEME_LIGHT')) { define('TXT_THEME_LIGHT', 'Light'); }
if (!defined('TXT_THEME_DARK')) { define('TXT_THEME_DARK', 'Dark'); }
if (!defined('SITE_NAME')) { define('SITE_NAME', 'My Website'); }
?>
<!DOCTYPE html>
<html lang="<?php echo LANG_CODE; ?>" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#0d6efd">
    <link rel="manifest" href="./assets/manifest.json">
    <title><?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
<a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

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

<!-- Main Content Area -->
<div id="main-content">
    <header class="header-area">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <i class="bi bi-boxes me-2"></i>
                    <?php echo SITE_NAME; ?>
                </a>
    
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' active' : ''); ?>" href="index.php">
                                <i class="bi bi-house-door me-1"></i><?php echo TXT_HOME; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' active' : ''); ?>" href="about.php">
                                <i class="bi bi-info-circle me-1"></i><?php echo TXT_ABOUT; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? ' active' : ''); ?>" href="contact.php">
                                <i class="bi bi-envelope me-1"></i><?php echo TXT_CONTACT; ?>
                            </a>
                        </li>
                    </ul>

                    <div class="nav-utilities d-flex align-items-center gap-2">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle" type="button" id="langDropdown" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-globe2"></i>
                                <span class="d-none d-sm-inline ms-1"><?php echo LANG_NAME; ?></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                                <li><a class="dropdown-item" href="?lang=en">English</a></li>
                                <li><a class="dropdown-item" href="?lang=hi">हिन्दी</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle" type="button" id="themeDropdown" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-circle-half"></i>
                                <span class="d-none d-sm-inline ms-1"><?php echo TXT_THEME; ?></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="auto">
                                    <i class="bi bi-circle-half me-2"></i><?php echo TXT_THEME_AUTO; ?>
                                    </a></li>
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="light">
                                        <i class="bi bi-sun me-2"></i><?php echo TXT_THEME_LIGHT; ?>
                                    </a></li>
                                <li><a class="dropdown-item" href="#" data-bs-theme-value="dark">
                                        <i class="bi bi-moon me-2"></i><?php echo TXT_THEME_DARK; ?>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container py-5">