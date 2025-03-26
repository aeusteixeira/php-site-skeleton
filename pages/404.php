<?php
$title = 'Página não encontrada';
$description = 'A página que você está procurando não foi encontrada.';
include 'components/header.php';
?>

<div class="container text-center py-5">
    <h1 class="display-1 text-muted">404</h1>
    <h2 class="mb-4">Página não encontrada</h2>
    <p class="lead mb-4">Desculpe, a página que você está procurando não existe ou foi movida.</p>
    <a href="<?php echo $config['url_site']; ?>" class="btn btn-primary">
        <i class="fas fa-home me-2"></i>Voltar para a página inicial
    </a>
</div>

<?php include 'components/footer.php'; ?> 