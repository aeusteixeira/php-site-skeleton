<?php
/**
 * Footer do site
 * Inclui scripts JS e informações de copyright
 */

$config = require __DIR__ . '/../config/config.php';
?>
    </main>
    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $config['nome_site']; ?>. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-decoration-none text-dark me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-decoration-none text-dark me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo $config['url_site']; ?>/assets/js/main.js"></script>
</body>
</html> 