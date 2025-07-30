<?php
// @/contact.php
// Include header (which includes config)
include_once 'header.php';
?>

<!-- Page Header -->
<section class="bg-light py-4 mb-4 rounded-3 mx-3 mx-md-0">
    <div class="container">
        <h1 class="display-6 fw-bold"><?php echo htmlspecialchars(TXT_CONTACT); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-primary"><?php echo htmlspecialchars(TXT_HOME); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars(TXT_CONTACT); ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<div class="container px-3 px-md-0">

    <!-- Contact Info & Form Grid -->
    <div class="row g-4">

        <!-- Contact Information Card -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 card-title"><?php echo htmlspecialchars('Get In Touch'); ?></h3>
                    <p class="text-muted flex-grow-1">
                        <?php echo htmlspecialchars('Feel free to reach out using the information below.'); ?>
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-envelope-fill text-primary fs-5 me-3 mt-1"></i>
                            <div>
                                <strong><?php echo htmlspecialchars('Email'); ?></strong><br>
                                <small>contact@example.com</small>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-telephone-fill text-success fs-5 me-3 mt-1"></i>
                            <div>
                                <strong><?php echo htmlspecialchars('Phone'); ?></strong><br>
                                <small>+1 (123) 456-7890</small>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-danger fs-5 me-3 mt-1"></i>
                            <div>
                                <strong><?php echo htmlspecialchars('Address'); ?></strong><br>
                                <small>1234 Main St, City, Country</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 card-title"><?php echo htmlspecialchars('Send a Message'); ?></h3>
                    <p class="text-muted small mb-4">
                        <?php echo htmlspecialchars('Fill out the form and we will get back to you.'); ?>
                    </p>

                    <!-- Simple Contact Form -->
                    <form novalidate>
                        <div class="mb-3">
                            <label for="contactName" class="form-label"><?php echo htmlspecialchars('Name'); ?></label>
                            <input type="text" class="form-control" id="contactName" required>
                            <div class="invalid-feedback"><?php echo htmlspecialchars('Please enter your name.'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="contactEmail" class="form-label"><?php echo htmlspecialchars('Email'); ?></label>
                            <input type="email" class="form-control" id="contactEmail" required>
                            <div class="invalid-feedback"><?php echo htmlspecialchars('Please enter a valid email.'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="contactMessage" class="form-label"><?php echo htmlspecialchars('Message'); ?></label>
                            <textarea class="form-control" id="contactMessage" rows="4" required></textarea>
                            <div class="invalid-feedback"><?php echo htmlspecialchars('Please enter your message.'); ?></div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-auto">
                            <i class="bi bi-send me-1"></i> <?php echo htmlspecialchars('Send Message'); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Alert -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong><?php echo htmlspecialchars('Note'); ?>:</strong>
                <?php echo htmlspecialchars('This is a demo. The form does not actually send emails.'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

</div>

<?php
// Include footer (closes HTML structure)
include_once 'footer.php';
?>