<?php
// contact.php
include('./@/header.php');
?>

<div class="row">
    <div class="col-12">
        <h1><?php echo TXT_CONTACT; ?></h1>
        <p><?php echo TXT_CONTACT_CONTENT; ?></p>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Get In Touch</h5>
                <p class="card-text">Feel free to reach out using the information below or the form.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> contact@example.com</li>
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +1 (123) 456-7890</li>
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> 1234 Main St, City, Country</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Send a Message</h5>
                <!-- Simple form placeholder -->
                <form>
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="contactName" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="contactEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="contactMessage" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send me-1"></i> Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="alert alert-info" role="alert">
            <i class="bi bi-info-circle-fill me-2"></i>
            This is just a demonstration. The form doesn't actually send emails in this static example.
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>