<?php
// about.php
include('./@/header.php');
?>

<div class="row">
    <div class="col-12">
        <h1><?php echo TXT_ABOUT; ?></h1>
        <p><?php echo TXT_ABOUT_CONTENT; ?></p>
        <p>This page also respects your system's preferred color scheme or your manual theme choice.</p>
        <p><i class="bi bi-lightbulb"></i> Did you know you can switch themes?</p>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <h3>Features</h3>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Multi-Language Support
                <span class="badge bg-primary rounded-pill"><i class="bi bi-globe"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Auto Light/Dark Mode
                <span class="badge bg-secondary rounded-pill"><i class="bi bi-circle-half"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Responsive Design
                <span class="badge bg-success rounded-pill"><i class="bi bi-phone"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced Splash Screen
                <span class="badge bg-danger rounded-pill"><i class="bi bi-stars"></i></span>
            </li>
             <li class="list-group-item d-flex justify-content-between align-items-center">
                Offline Support
                <span class="badge bg-warning rounded-pill"><i class="bi bi-wifi-off"></i></span>
            </li>
        </ul>
    </div>
    <div class="col-md-6">
        <h3>Technologies Used</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Core Stack</h5>
                <p class="card-text">This project demonstrates a modern PHP setup.</p>
                <ul>
                    <li>PHP (Backend)</li>
                    <li>Bootstrap 5 (Frontend Framework)</li>
                    <li>Bootstrap Icons (Icon Library)</li>
                    <li>JavaScript (Interactivity)</li>
                    <li>HTML5 & CSS3</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
include('./@/footer.php');
?>