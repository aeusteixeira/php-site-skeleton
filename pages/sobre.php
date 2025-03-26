<?php
$title = 'Sobre Nós';
$description = 'Conheça mais sobre nossa empresa e nossa missão.';
include __DIR__ . '/../components/header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h1 class="mb-4">Sobre Nós</h1>
        <p class="lead mb-4">Somos uma empresa comprometida com a excelência e a inovação.</p>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title h4">Nossa Missão</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title h4">Nossa Visão</h2>
                <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <h2 class="card-title h4">Nossos Valores</h2>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Compromisso com a qualidade
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Inovação constante
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Foco no cliente
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Responsabilidade social
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title h4">Contato Rápido</h2>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        Endereço da Empresa
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone text-primary me-2"></i>
                        (11) 1234-5678
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        contato@empresa.com
                    </li>
                    <li>
                        <i class="fas fa-clock text-primary me-2"></i>
                        Seg-Sex: 9h às 18h
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../components/footer.php'; ?> 