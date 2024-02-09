<?php
require_once('../controllers/UserController.php');

$userController = new UserController();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $userController->excluirUsuario($id);
    header('Location: formulario.php');
    exit;
}
?>
