<?php
// @/about.php
// Include header (which includes config)
include_once 'header.php';
?>

<!-- Page Header -->
<section class="bg-light py-4 mb-4 rounded-3 mx-3 mx-md-0">
    <div class="container">
        <h1 class="display-6 fw-bold"><?php echo htmlspecialchars(TXT_ABOUT); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-primary"><?php echo htmlspecialchars(TXT_HOME); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars(TXT_ABOUT); ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<div class="container px-3 px-md-0">

    <!-- Intro Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="h4"><?php echo htmlspecialchars('About This Project'); ?></h2>
            <p><?php echo htmlspecialchars(TXT_ABOUT_CONTENT); ?></p>
            <p class="text-muted">
                <i class="bi bi-lightbulb me-2"></i>
                <?php echo htmlspecialchars('This page respects your system\'s preferred color scheme or your manual theme choice.'); ?>
            </p>
        </div>
    </div>

    <!-- Features & Tech Stack -->
    <div class="row g-4">

        <!-- Features List -->
        <div class="col-lg-6">
            <h3 class="h5 mb-3"><?php echo htmlspecialchars('Features'); ?></h3>
            <ul class="list-group list-group-flush border rounded-3 shadow-sm">
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><?php echo htmlspecialchars('Multi-Language Support'); ?></span>
                    <i class="bi bi-globe text-primary fs-4"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><?php echo htmlspecialchars('Auto Light/Dark Mode'); ?></span>
                    <i class="bi bi-circle-half text-secondary fs-4"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><?php echo htmlspecialchars('Responsive Design'); ?></span>
                    <i class="bi bi-phone text-success fs-4"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><?php echo htmlspecialchars('Advanced Splash Screen'); ?></span>
                    <i class="bi bi-stars text-danger fs-4"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span><?php echo htmlspecialchars('Offline Support'); ?></span>
                    <i class="bi bi-wifi-off text-warning fs-4"></i>
                </li>
            </ul>
        </div>

        <!-- Technologies Used -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h3 class="h5 card-title"><?php echo htmlspecialchars('Technologies Used'); ?></h3>
                    <p class="card-text text-muted">
                        <?php echo htmlspecialchars('This project demonstrates a modern PHP setup.'); ?>
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-code-slash me-2 text-primary"></i> PHP (Backend)</li>
                        <li class="mb-2"><i class="bi bi-bootstrap me-2 text-primary"></i> Bootstrap 5 (Frontend Framework)</li>
                        <li class="mb-2"><i class="bi bi-app me-2 text-primary"></i> Bootstrap Icons (Icon Library)</li>
                        <li class="mb-2"><i class="bi bi-braces me-2 text-primary"></i> JavaScript (Interactivity)</li>
                        <li class="mb-2"><i class="bi bi-filetype-html me-2 text-primary"></i> HTML5 & CSS3</li>
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
                <strong><?php echo htmlspecialchars('Tip'); ?>:</strong>
                <?php echo htmlspecialchars('Resize your browser to see responsive layout changes.'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

</div>

<?php
// Include footer (closes HTML structure)
include_once 'footer.php';
?>