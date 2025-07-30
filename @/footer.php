<?php
// @/footer.php
// This file should only contain the closing part of the page
// Ensure this is included *once* at the end of each main page (index.php, about.php, contact.php)
?>

        <!-- End of Main Content -->
    </main>

    <!-- Sticky Footer -->
    <footer class="footer bg-light text-center text-md-start mt-auto py-3 shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    &copy; <?php echo date("Y"); ?> <strong><?php echo htmlspecialchars(SITE_NAME); ?></strong>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                    <small class="text-muted">
                        <?php echo htmlspecialchars(TXT_SITE_DESCRIPTION); ?>
                    </small>
                </div>
            </div>
        </div>
    </footer>

</div> <!-- End #main-content wrapper -->
<!-- End of page content -->

<!-- Critical Scripts (Loaded at end for performance) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js" defer></script>

</body>
</html>