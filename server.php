<?php
/**
 * Arquivo para iniciar o servidor PHP embutido
 * Use: php server.php
 */

// Define o diretório raiz
$root = __DIR__;

// Inicia o servidor
echo "Servidor iniciado em http://localhost:8080\n";
echo "Pressione Ctrl+C para parar o servidor\n\n";

// Executa o servidor PHP embutido
passthru('php -S localhost:8080 -t .'); 