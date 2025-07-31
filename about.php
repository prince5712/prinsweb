<?php
// @/about.php
// Include header (which includes config)
include_once './@/header.php';
?>

<!-- Hero Section -->
<div class="bg-primary bg-opacity-10 py-5">
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/img/about-hero.jpg" class="d-block mx-lg-auto img-fluid" alt="About Us" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?php echo TXT_ABOUT; ?></h1>
                <p class="lead">Our company has been at the forefront of innovation for over a decade, delivering exceptional
                    solutions to our valued clients.</p>
            </div>
            </div>
            </div>
</div>

<!-- Mission Section -->
<div class="py-5">
    <div class="container">
        <div class="row g-4 py-5">
            <div class="col-md-4">
                <div class="feature-icon bg-primary p-3 mb-3 rounded-circle d-inline-flex">
                    <i class="bi bi-bullseye text-white fs-3"></i>
                </div>
                <h3 class="text-primary">Our Mission</h3>
                <p>To provide innovative solutions that empower businesses to achieve their full potential.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon bg-primary p-3 mb-3 rounded-circle d-inline-flex">
                    <i class="bi bi-eye text-white fs-3"></i>
                </div>
                <h3 class="text-primary">Our Vision</h3>
                <p>To become the global leader in delivering transformative digital solutions.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon bg-primary p-3 mb-3 rounded-circle d-inline-flex">
                    <i class="bi bi-heart text-white fs-3"></i>
                </div>
                <h3 class="text-primary">Our Values</h3>
                <p>Innovation, integrity, and excellence in everything we do.</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container py-5">
    <h2 class="text-center mb-5 text-primary">Our Team</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm transition-hover">
                <img src="assets/img/team-1.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary">John Doe</h5>
                    <p class="card-text text-muted">CEO & Founder</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm transition-hover">
                <img src="assets/img/team-2.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary">Jane Smith</h5>
                    <p class="card-text text-muted">Technical Director</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm transition-hover">
                <img src="assets/img/team-3.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary">Mike Johnson</h5>
                    <p class="card-text text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.transition-hover {
    transition: transform 0.3s ease-in-out;
}
.transition-hover:hover {
    transform: translateY(-5px);
}
</style>

<?php
// Include footer (closes HTML structure)
include_once './@/footer.php';
?>