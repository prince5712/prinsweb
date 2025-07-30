<?php
// @/about.php
// Include header (which includes config)
include_once './@/header.php';
?>

<!-- Hero Section -->
<div class="bg-primary text-white p-5 rounded-4 mb-5 position-relative overflow-hidden">
    <div class="position-absolute top-0 end-0 p-5">
        <i class="bi bi-info-circle display-1 opacity-25"></i>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-3"><?php echo TXT_ABOUT; ?></h1>
            <p class="lead mb-4"><?php echo TXT_ABOUT_CONTENT; ?></p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo TXT_HOME; ?></a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page"><?php echo TXT_ABOUT; ?></li>
                    </ol>
                    </nav>
                    </div>
    </div>
</div>

<!-- Main Content -->
<div class="row g-4 mb-5">
    <!-- Project Overview -->
    <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bi bi-stack text-primary display-6"></i>
                    </div>
                    <h2 class="h4 mb-0">Project Overview</h2>
                </div>
                <p class="text-muted"><?php echo TXT_SITE_DESCRIPTION; ?></p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Modern Design</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Responsive Layout</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Multi-Language Support</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Dark/Light Theme</li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    
                    <!-- Tech Stack -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bi bi-code-square text-primary display-6"></i>
                    </div>
                    <h2 class="h4 mb-0">Tech Stack</h2>
                </div>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-body-tertiary">
                            <i class="bi bi-filetype-php text-primary me-2"></i>PHP 7.4+
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-body-tertiary">
                            <i class="bi bi-bootstrap text-primary me-2"></i>Bootstrap 5
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-body-tertiary">
                            <i class="bi bi-braces text-primary me-2"></i>JavaScript
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-body-tertiary">
                            <i class="bi bi-gear text-primary me-2"></i>Service Worker
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <h2 class="h4 mb-4">Our Team</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill text-primary display-6"></i>
                    </div>
                    <h5 class="mb-1">John Doe</h5>
                    <p class="text-muted small mb-0">Lead Developer</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill text-primary display-6"></i>
                    </div>
                    <h5 class="mb-1">Jane Smith</h5>
                    <p class="text-muted small mb-0">UI/UX Designer</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill text-primary display-6"></i>
                    </div>
                    <h5 class="mb-1">Alex Johnson</h5>
                    <p class="text-muted small mb-0">Full Stack Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer (closes HTML structure)
include_once './@/footer.php';
?>