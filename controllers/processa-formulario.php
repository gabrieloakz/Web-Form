<?php

require_once 'UsuarioController.php';
require_once '../config.php';
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cria uma instância do controlador
    $usuarioController = new UsuarioController();

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    // Chama a função no controlador para inserir o usuário
    $usuarioController = new UsuarioController($this->conn);
    $usuarioController->inserirUsuario($nome, $sobrenome, $idade);
    

    // Redireciona para a página de sucesso ou qualquer outra página desejada
    header('Location: sucesso.php');
    exit();
}

// Se o formulário não foi submetido, redireciona para a página inicial ou outra página desejada
header('Location: index.php');
exit();

?>
