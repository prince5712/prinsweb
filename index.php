<?php
include('./@/header.php');
?>

<div class="jumbotron bg-primary text-white p-5 rounded mb-4">
    <h1 class="display-4"><?php echo TXT_WELCOME; ?></h1>
    <p class="lead"><?php echo TXT_SITE_DESCRIPTION; ?></p>
    <hr class="my-4 bg-light">
    <p>Try switching the language or theme using the controls in the navigation bar.</p>
    <p><i class="bi bi-stars"></i> This page uses Bootstrap Icons!</p>
    <a class="btn btn-light btn-lg" href="about.php" role="button">Learn More</a>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><?php echo TXT_HOME; ?></h2>
                <p class="card-text">This is the home page content area. It's responsive thanks to Bootstrap's grid system.</p>
                <p><i class="bi bi-house-door-fill"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><?php echo TXT_ABOUT; ?></h2>
                <p class="card-text">Learn more about this project and its features.</p>
                <a class="btn btn-outline-primary" href="about.php" role="button"><?php echo TXT_ABOUT; ?> &raquo;</a>
                <p><i class="bi bi-info-circle-fill"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><?php echo TXT_CONTACT; ?></h2>
                <p class="card-text">Get in touch with the creators or provide feedback.</p>
                <a class="btn btn-outline-primary" href="contact.php" role="button"><?php echo TXT_CONTACT; ?> &raquo;</a>
                <p><i class="bi bi-envelope-fill"></i></p>
            </div>
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>