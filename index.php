<?php
include('./@/header.php');
?>

<!-- Hero Section -->
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-4 fw-bold text-body-emphasis"><?php echo TXT_WELCOME; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo TXT_SITE_DESCRIPTION; ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="about.php" class="btn btn-primary btn-lg px-4 gap-3">
                <i class="bi bi-arrow-right-circle me-2"></i>Learn More
            </a>
            <a href="contact.php" class="btn btn-outline-secondary btn-lg px-4">
                <i class="bi bi-envelope me-2"></i>Contact Us
            </a>
        </div>
    </div>
</div>

<!-- Features Grid -->
<div class="container px-4 py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="feature-icon bg-primary bg-gradient p-2 mb-3 rounded-3 d-inline-flex">
                        <i class="bi bi-house-door-fill text-white fs-3"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis"><?php echo TXT_HOME; ?></h3>
                    <p class="text-body-secondary">Discover our comprehensive suite of services designed to meet your needs.
                    </p>
                    <a href="#" class="icon-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="feature-icon bg-primary bg-gradient p-2 mb-3 rounded-3 d-inline-flex">
                        <i class="bi bi-info-circle-fill text-white fs-3"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis"><?php echo TXT_ABOUT; ?></h3>
                    <p class="text-body-secondary">Learn about our history, mission, and the team behind our success.
                    </p>
                    <a href="about.php" class="icon-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                    </div>
                    </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="feature-icon bg-primary bg-gradient p-2 mb-3 rounded-3 d-inline-flex">
                        <i class="bi bi-envelope-fill text-white fs-3"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis"><?php echo TXT_CONTACT; ?></h3>
                    <p class="text-body-secondary">Get in touch with our team for support or inquiries.</p>
                    <a href="contact.php" class="icon-link">
                        Contact us
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>