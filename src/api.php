<?php
require 'auth.php';
require 'controllers\userController.php';

// Simples roteador para exemplo
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

if (autenticar() === 0) {
  return;
} 

// Exemplo de rota para usuários
if ($requestUri[1] === 'users') {

  BuscaUsuario();
}

?>