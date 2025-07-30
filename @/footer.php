<?php
?>
    </main>
    <footer class="footer mt-auto py-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <h5 class="footer-heading mb-3">
                        <i class="bi bi-boxes me-2"></i><?php echo SITE_NAME; ?>
                    </h5>
                    <p class="small mb-2"><?php echo TXT_SITE_DESCRIPTION; ?></p>
                    <div class="social-links">
                        <a href="#" class="me-2"><i class="bi bi-github"></i></a>
                        <a href="#" class="me-2"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="me-2"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php"><?php echo TXT_HOME; ?></a></li>
                        <li><a href="about.php"><?php echo TXT_ABOUT; ?></a></li>
                        <li><a href="contact.php"><?php echo TXT_CONTACT; ?></a></li>
                    </ul>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <h5 class="footer-heading">Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <h5 class="footer-heading">Contact</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope-fill me-2"></i>contact@example.com</li>
                        <li><i class="bi bi-telephone-fill me-2"></i>+1 234 567 890</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small>&copy; <?php echo date("Y"); ?> <?php echo SITE_NAME; ?>. All rights reserved.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="text-muted">
                        <span class="me-2">Language: <?php echo LANG_NAME; ?></span>
                        <a href="#" class="text-decoration-underline me-2">Accessibility</a>
                        <a href="#" class="text-decoration-underline">Privacy</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="./assets/js/main.js" defer></script>
</body>
</html>