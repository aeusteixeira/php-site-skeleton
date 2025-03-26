<?php
$title = 'Contato';
$description = 'Entre em contato conosco através do formulário abaixo.';
include __DIR__ . '/../components/header.php';
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="mb-4">Contato</h1>
        <p class="lead mb-4">Preencha o formulário abaixo para entrar em contato conosco. Responderemos o mais breve possível.</p>
        
        <form id="contactForm" action="/actions/process_form.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
                <div class="invalid-feedback">
                    Por favor, insira seu nome.
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Por favor, insira um e-mail válido.
                </div>
            </div>
            
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                <div class="invalid-feedback">
                    Por favor, insira sua mensagem.
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
            </button>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../components/footer.php'; ?> 