<?php
// Autoload manual das classes (se necessário)
spl_autoload_register(function ($class) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';

    // echo "Buscando: {$file}\n"; // Para depuração
    if (file_exists($file)) {
        require_once $file;
    }
});

// Carregar as configurações
require_once '../config/config.php';

// Carregar o roteador

// Iniciar o roteador
$router = new App\Core\Router();
$router->run();
