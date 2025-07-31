<?php
// Include header (which includes config)
include_once './@/header.php';
?>

<!-- Hero Section -->
<div class="bg-primary bg-opacity-10 py-5">
    <div class="container">
        <h1 class="display-5 fw-bold text-center mb-3"><?php echo TXT_CONTACT; ?></h1>
        <p class="text-center lead">Get in touch with us. We're here to help!</p>
    </div>
</div>

<!-- Contact Section -->
<div class="container py-5">
    <div class="row g-5">
        <!-- Contact Information -->
        <div class="col-md-4">
            <h3 class="mb-4">Contact Information</h3>
            <div class="d-flex mb-3">
                <div class="feature-icon bg-primary p-2 me-3 rounded-circle d-inline-flex">
                    <i class="bi bi-geo-alt text-white"></i>
                </div>
                <div>
                    <h6 class="mb-1">Address</h6>
                    <p class="mb-0">123 Business Street<br>City, Country</p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="feature-icon bg-primary p-2 me-3 rounded-circle d-inline-flex">
                    <i class="bi bi-telephone text-white"></i>
                </div>
                <div>
                    <h6 class="mb-1">Phone</h6>
                    <p class="mb-0">+1 234 567 890</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="feature-icon bg-primary p-2 me-3 rounded-circle d-inline-flex">
                    <i class="bi bi-envelope text-white"></i>
                </div>
                <div>
                    <h6 class="mb-1">Email</h6>
                    <p class="mb-0">info@example.com</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-8">
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" required>
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" required>
                        <div class="invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" required>
                        <div class="invalid-feedback">
                            Please enter a subject.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                        <div class="invalid-feedback">
                            Please enter your message.
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Form validation
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
</script>

<?php
include_once './@/footer.php';
?>