<?php
/**
 * Processamento do formulário de contato
 */

require_once '../config/config.php';
require_once '../utils/utils.php';

$config = require '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = sanitize($_POST['nome'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $mensagem = sanitize($_POST['mensagem'] ?? '');
    
    // Validação básica
    if (empty($nome) || empty($email) || empty($mensagem)) {
        header("Location: ../contato.php?status=empty_fields");
        exit;
    }
    
    if (!validateEmail($email)) {
        header("Location: ../contato.php?status=invalid_email");
        exit;
    }
    
    // Preparar e-mail
    $to = $config['email_destino'];
    $subject = "Nova mensagem de contato - {$config['nome_site']}";
    $message = "Nome: {$nome}\n";
    $message .= "E-mail: {$email}\n\n";
    $message .= "Mensagem:\n{$mensagem}";
    $headers = "From: {$email}\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Enviar e-mail
    if (mail($to, $subject, $message, $headers)) {
        header("Location: ../contato.php?status=success");
    } else {
        header("Location: ../contato.php?status=error");
    }
    exit;
}

// Se não for POST, redireciona para a página de contato
header("Location: ../contato.php");
exit; 