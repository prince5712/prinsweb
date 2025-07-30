<?php
// @/about.php
// Include header (which includes config)
include_once './@/header.php';
?>

<!-- Page Header -->
<section class="bg-light py-4 mb-4 rounded-3 mx-3 mx-md-0 shadow-sm">
    <div class="container">
        <h1 class="display-6 fw-bold"><?= htmlspecialchars(TXT_ABOUT) ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-primary"><?= htmlspecialchars(TXT_HOME) ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars(TXT_ABOUT) ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<div class="container px-3 px-md-0">

    <!-- Intro Section -->
    <div class="row mb-5">
        <div class="col-md-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4 text-center p-3">
                        <img src="assets/project-logo.png" alt="Project Logo" class="img-fluid rounded-circle shadow-sm" style="max-width:120px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="h4 mb-2"><?= htmlspecialchars('About This Project') ?></h2>
                            <p><?= htmlspecialchars(TXT_ABOUT_CONTENT) ?></p>
                            <p class="text-muted mb-0">
                                <i class="bi bi-lightbulb me-2"></i>
                                <?= htmlspecialchars('This page respects your system\'s preferred color scheme or your manual theme choice.') ?>
                                </p>
                                </div>
                                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features & Tech Stack -->
    <div class="row g-4">

        <!-- Features List -->
        <div class="col-lg-6">
            <h3 class="h5 mb-3"><?= htmlspecialchars('Features') ?></h3>
            <ul class="list-group list-group-flush border rounded-3 shadow-sm">
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><i class="bi bi-globe text-primary me-2"></i>Multi-Language Support</span>
                    <span class="badge bg-primary">New</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><i class="bi bi-circle-half text-secondary me-2"></i>Auto Light/Dark Mode</span>
                    <span class="badge bg-secondary">Smart</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><i class="bi bi-phone text-success me-2"></i>Responsive Design</span>
                    <span class="badge bg-success">Mobile</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><i class="bi bi-stars text-danger me-2"></i>Advanced Splash Screen</span>
                    <span class="badge bg-danger">Visual</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><i class="bi bi-wifi-off text-warning me-2"></i>Offline Support</span>
                    <span class="badge bg-warning text-dark">PWA</span>
                </li>
            </ul>
        </div>

        <!-- Technologies Used -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h3 class="h5 card-title"><?= htmlspecialchars('Technologies Used') ?></h3>
                    <p class="card-text text-muted"><?= htmlspecialchars('This project demonstrates a modern PHP setup.') ?></p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-code-slash me-2 text-primary"></i>PHP <span class="badge bg-light text-dark ms-2">Backend</span></li>
                        <li class="mb-2"><i class="bi bi-bootstrap me-2 text-primary"></i>Bootstrap 5 <span class="badge bg-light text-dark ms-2">Frontend</span></li>
                        <li class="mb-2"><i class="bi bi-app me-2 text-primary"></i>Bootstrap Icons</li>
                        <li class="mb-2"><i class="bi bi-braces me-2 text-primary"></i>JavaScript</li>
                        <li class="mb-2"><i class="bi bi-filetype-html me-2 text-primary"></i>HTML5 &amp; CSS3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contributors Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3"><i class="bi bi-people-fill me-2 text-info"></i><?= htmlspecialchars('Contributors') ?></h4>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3">
                                                <span class="fw-bold">Jane Doe</span> <span class="text-muted">(Lead Developer)</span>
                                            </li>
                                            <li class="list-inline-item me-3">
                                                <span class="fw-bold">John Smith</span> <span class="text-muted">(UI/UX)</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="fw-bold">Alex Lee</span> <span class="text-muted">(Localization)</span>
                                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong><?= htmlspecialchars('Tip') ?>:</strong>
                <?= htmlspecialchars('Resize your browser to see responsive layout changes.') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

</div>

<?php
// Include footer (closes HTML structure)
include_once './@/footer.php';
?>