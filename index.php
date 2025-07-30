<?php
// @/index.php
// Include header (which includes config)
include_once './@/header.php';
?>

<!-- Hero Section (Modern Jumbotron Replacement) -->
<section class="bg-primary text-white py-5 rounded-4 mb-4 shadow-sm mx-3 mx-md-0">
    <div class="container">
        <h1 class="display-5 fw-bold"><?php echo htmlspecialchars(TXT_WELCOME); ?></h1>
        <p class="lead"><?php echo htmlspecialchars(TXT_SITE_DESCRIPTION); ?></p>
        <hr class="my-4 border-light opacity-25">
        <p><?php echo htmlspecialchars('Try switching the language or theme using the controls in the navigation bar.'); ?></p>
        <p><i class="bi bi-stars me-2"></i> <?php echo htmlspecialchars('This page uses Bootstrap Icons!'); ?></p>
    </div>
</section>

<!-- Features Grid -->
<div class="container px-3 px-md-0">
    <div class="row g-4">
        <!-- Home Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-house-door-fill text-primary" style="font-size: 2.5rem;"></i>
                    <h2 class="h5 mt-3"><?php echo htmlspecialchars(TXT_HOME); ?></h2>
                    <p class="text-muted">
                        <?php echo htmlspecialchars('This is the home page content area. It\'s responsive thanks to Bootstrap\'s grid system.'); ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- About Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-info-circle-fill text-success" style="font-size: 2.5rem;"></i>
                    <h2 class="h5 mt-3"><?php echo htmlspecialchars(TXT_ABOUT); ?></h2>
                    <p class="text-muted">
                        <?php echo htmlspecialchars('Learn more about this project and its features.'); ?>
                    </p>
                    <a class="btn btn-outline-success btn-sm mt-auto" href="about.php">
                        <?php echo htmlspecialchars(TXT_ABOUT); ?> &raquo;
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-envelope-fill text-danger" style="font-size: 2.5rem;"></i>
                    <h2 class="h5 mt-3"><?php echo htmlspecialchars(TXT_CONTACT); ?></h2>
                    <p class="text-muted">
                        <?php echo htmlspecialchars('Get in touch with the creators or provide feedback.'); ?>
                    </p>
                    <a class="btn btn-outline-danger btn-sm mt-auto" href="contact.php">
                        <?php echo htmlspecialchars(TXT_CONTACT); ?> &raquo;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Content Section (Optional) -->
<div class="container mt-5 px-3 px-md-0">
    <div class="row">
        <div class="col-12 text-center">
            <p class="text-muted small">
                <i class="bi bi-lightbulb me-1"></i>
                <?php echo htmlspecialchars('Resize the browser to see responsive layout changes.'); ?>
            </p>
        </div>
    </div>
</div>

<?php
// Include footer (closes HTML structure)
include_once './@/footer.php';
?>