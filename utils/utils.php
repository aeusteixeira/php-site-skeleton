<?php
/**
 * Arquivo de funções utilitárias
 * Contém funções comuns usadas em todo o site
 */

/**
 * Sanitiza uma string removendo caracteres especiais e espaços extras
 * @param string $input String a ser sanitizada
 * @return string String sanitizada
 */
function sanitize($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

/**
 * Valida um endereço de e-mail
 * @param string $email E-mail a ser validado
 * @return bool True se o e-mail for válido
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Gera uma mensagem de status para o formulário
 * @param string $status Status da operação
 * @return array Array com mensagem e classe CSS
 */
function getStatusMessage($status) {
    $messages = [
        'success' => ['Mensagem enviada com sucesso!', 'alert-success'],
        'error' => ['Erro ao enviar mensagem. Tente novamente.', 'alert-danger'],
        'invalid_email' => ['E-mail inválido. Verifique e tente novamente.', 'alert-warning'],
        'empty_fields' => ['Por favor, preencha todos os campos.', 'alert-warning']
    ];
    
    return $messages[$status] ?? ['Erro desconhecido.', 'alert-danger'];
} 