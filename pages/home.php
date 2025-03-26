<?php
$title = 'Página Inicial';
$description = 'Bem-vindo ao nosso site. Conheça nossos produtos e serviços.';
include __DIR__ . '/../components/header.php';
?>

<!-- Hero Section -->
<div class="row align-items-center py-5">
    <div class="col-md-6">
        <h1 class="display-4 mb-4">Bem-vindo ao Nosso Site</h1>
        <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="/sobre" class="btn btn-primary btn-lg">
            <i class="fas fa-info-circle me-2"></i>Saiba Mais
        </a>
    </div>
    <div class="col-md-6">
        <img src="/assets/img/hero-image.jpg" alt="Hero Image" class="img-fluid rounded shadow">
    </div>
</div>

<!-- Features Section -->
<div class="row py-5">
    <div class="col-12 text-center mb-5">
        <h2 class="h1">Nossos Diferenciais</h2>
        <p class="lead">Conheça as principais características que nos tornam únicos</p>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="fas fa-rocket fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Inovação</h3>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Equipe Especializada</h3>
                <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Segurança</h3>
                <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="row py-5 bg-light rounded">
    <div class="col-md-8 mx-auto text-center">
        <h2 class="h1 mb-4">Pronto para Começar?</h2>
        <p class="lead mb-4">Entre em contato conosco e descubra como podemos ajudar você.</p>
        <a href="/contato" class="btn btn-primary btn-lg">
            <i class="fas fa-envelope me-2"></i>Fale Conosco
        </a>
    </div>
</div>

<?php include __DIR__ . '/../components/footer.php'; ?> 