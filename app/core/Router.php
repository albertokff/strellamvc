<?php

namespace app\core;

class Router
{
    // Definir um array de rotas
    private $routes = [
        'home/main' => ['controller' => 'HomeController', 'action' => 'Main'],
        'manager/main' => ['controller' => 'ManagerController', 'action' => 'Main'],
        'user/show' => ['controller' => 'UserController', 'action' => 'show'],
        'post/create' => ['controller' => 'PostController', 'action' => 'create']
    ];

    // Método para executar a rota
    public function run()
    {
        // Pega a URL
        $url = $_SERVER['REQUEST_URI'];
        
        // Limpa a URL (remover barra no final)
        $url = trim($url, '/');
        
        // Verifica se a URL existe no array de rotas
        if (array_key_exists($url, $this->routes)) {
            $route = $this->routes[$url];
            $controllerName = 'App\\Controllers\\' . $route['controller'];
            $actionName = $route['action'];
            
            // Verifica se o controlador existe
            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                
                // Verifica se a ação existe no controlador
                if (method_exists($controller, $actionName)) {
                    $controller->$actionName();
                } else {
                    echo "Ação não encontrada!";
                }
            } else {
                echo "Controlador não encontrado!";
            }
        } else {
            echo "Rota não encontrada!";
        }
    }
}
