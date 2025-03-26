<?php
/**
 * Arquivo de rotas web
 * Contém todas as rotas públicas do site
 */

// Rota da página inicial
$router->get('/', function() {
    require 'pages/home.php';
});

// Rota da página sobre
$router->get('/sobre', function() {
    require 'pages/sobre.php';
});

// Rota da página de contato
$router->get('/contato', function() {
    require 'pages/contato.php';
});

// Rota para processar o formulário de contato
$router->post('/actions/process_form.php', function() {
    require 'actions/process_form.php';
});
