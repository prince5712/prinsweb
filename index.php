<?php
include('./@/header.php');
?>

<!-- Hero Section -->
<div class="hero-section bg-primary text-white p-5 rounded-4 mb-5 position-relative overflow-hidden">
    <div class="position-absolute top-0 end-0 p-5">
        <i class="bi bi-boxes display-1 opacity-25"></i>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-3"><?php echo TXT_WELCOME; ?></h1>
            <p class="lead mb-4"><?php echo TXT_SITE_DESCRIPTION; ?></p>
            <div class="d-flex gap-3 flex-wrap">
                <a class="btn btn-light btn-lg" href="about.php" role="button">
                    <i class="bi bi-arrow-right-circle me-2"></i>Learn More
                </a>
                <a class="btn btn-outline-light btn-lg" href="contact.php" role="button">
                    <i class="bi bi-envelope me-2"></i>Get in Touch
                </a>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block text-center">
            <i class="bi bi-layers-half display-1"></i>
        </div>
    </div>
</div>

<!-- Features Grid -->
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-effect">
            <div class="card-body">
                <div class="feature-icon mb-3">
                    <i class="bi bi-house-door-fill text-primary display-5"></i>
                </div>
                <h2 class="card-title h4"><?php echo TXT_HOME; ?></h2>
                <p class="card-text text-muted">This is the home page content area. It's responsive thanks to Bootstrap's grid system.
                </p>
                <div class="d-flex justify-content-end">
                    <i class="bi bi-arrow-right text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-effect">
            <div class="card-body">
                <div class="feature-icon mb-3">
                    <i class="bi bi-info-circle-fill text-primary display-5"></i>
                </div>
                <h2 class="card-title h4"><?php echo TXT_ABOUT; ?></h2>
                <p class="card-text text-muted">Learn more about this project and its features.</p>
                <a class="btn btn-outline-primary w-100" href="about.php" role="button">
                    <i class="bi bi-arrow-right-circle me-2"></i><?php echo TXT_ABOUT; ?>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-effect">
            <div class="card-body">
                <div class="feature-icon mb-3">
                    <i class="bi bi-envelope-fill text-primary display-5"></i>
                </div>
                <h2 class="card-title h4"><?php echo TXT_CONTACT; ?></h2>
                <p class="card-text text-muted">Get in touch with the creators or provide feedback.</p>
                <a class="btn btn-outline-primary w-100" href="contact.php" role="button">
                    <i class="bi bi-send me-2"></i><?php echo TXT_CONTACT; ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>