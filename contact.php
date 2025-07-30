<?php
include('./@/header.php');
?>

<!-- Hero Section -->
<div class="bg-primary text-white p-5 rounded-4 mb-5 position-relative overflow-hidden">
    <div class="position-absolute top-0 end-0 p-5">
        <i class="bi bi-envelope display-1 opacity-25"></i>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-3"><?php echo TXT_CONTACT; ?></h1>
            <p class="lead mb-4"><?php echo TXT_CONTACT_CONTENT; ?></p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo TXT_HOME; ?></a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page"><?php echo TXT_CONTACT; ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Contact Information Cards -->
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
                <div class="feature-icon bg-primary bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                    <i class="bi bi-envelope-fill text-primary display-6"></i>
                </div>
                <h3 class="h5 mb-3">Email Us</h3>
                <p class="text-muted mb-0">contact@example.com</p>
                <p class="text-muted mb-0">support@example.com</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
                <div class="feature-icon bg-primary bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                    <i class="bi bi-telephone-fill text-primary display-6"></i>
                </div>
                <h3 class="h5 mb-3">Call Us</h3>
                <p class="text-muted mb-0">+1 (123) 456-7890</p>
                <p class="text-muted mb-0">+1 (123) 456-7891</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
                <div class="feature-icon bg-primary bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                    <i class="bi bi-geo-alt-fill text-primary display-6"></i>
                </div>
                <h3 class="h5 mb-3">Visit Us</h3>
                <p class="text-muted mb-0">1234 Main Street</p>
                <p class="text-muted mb-0">City, Country 12345</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h4 mb-4"><?php echo TXT_SEND_MESSAGE; ?></h2>
                                <form id="contactForm" class="needs-validation" novalidate>
                    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
                    <div class="mb-3">
                        <label for="contactName" class="form-label"><?php echo TXT_NAME; ?> <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="contactName" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label"><?php echo TXT_EMAIL; ?> <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="contactEmail" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactSubject" class="form-label">Subject <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-chat"></i></span>
                            <input type="text" class="form-control" id="contactSubject" required>
                            <div class="invalid-feedback">Please enter a subject.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label"><?php echo TXT_MESSAGE; ?> <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-pencil"></i></span>
                            <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                            <div class="invalid-feedback">Please enter your message.</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send me-2"></i><?php echo TXT_SEND; ?>
                    </button>
                    </form>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column">
                    <h2 class="h4 mb-4">Location</h2>
                    <div class="flex-grow-1 bg-body-tertiary rounded-3 p-3">
                        <!-- Replace with actual map embed code -->
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007!5e0!3m2!1sen!2sus!4v1656025099968!5m2!1sen!2sus" 
                                style="border:0;" allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>