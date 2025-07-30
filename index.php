<?php
// index.php
include('./@/header.php');
?>

<div class="jumbotron bg-primary text-white p-5 rounded mb-4">
    <h1 class="display-4"><?php echo TXT_WELCOME; ?></h1>
    <p class="lead"><?php echo TXT_SITE_DESCRIPTION; ?></p>
    <hr class="my-4 bg-light">
    <p>Try switching the language or theme using the controls in the navigation bar.</p>
    <!-- Example of using Bootstrap Icons -->
    <p><i class="bi bi-stars"></i> This page uses Bootstrap Icons!</p>
</div>

<div class="row">
    <div class="col-md-4">
        <h2><?php echo TXT_HOME; ?></h2>
        <p>This is the home page content area. It's responsive thanks to Bootstrap's grid system.</p>
        <p><i class="bi bi-house-door-fill"></i></p>
    </div>
    <div class="col-md-4">
        <h2><?php echo TXT_ABOUT; ?></h2>
        <p>Learn more about this project and its features.</p>
        <p><a class="btn btn-outline-primary" href="about.php" role="button"><?php echo TXT_ABOUT; ?> &raquo;</a></p>
        <p><i class="bi bi-info-circle-fill"></i></p>
    </div>
    <div class="col-md-4">
        <h2><?php echo TXT_CONTACT; ?></h2>
        <p>Get in touch with the creators or provide feedback.</p>
        <p><a class="btn btn-outline-primary" href="contact.php" role="button"><?php echo TXT_CONTACT; ?> &raquo;</a></p>
        <p><i class="bi bi-envelope-fill"></i></p>
    </div>
</div>

<?php
include('./@/footer.php');
?>