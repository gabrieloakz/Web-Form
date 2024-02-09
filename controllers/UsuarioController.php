<?php

require_once '../models/UsuarioModel.php';
require_once '../config.php';

class UsuarioController {
    public $conn;
    public $usuarioModel;

    public function __construct() {
       
        $this->usuarioModel = new UsuarioModel($this->conn);
    }

    
    public function exibirListaUsuarios() {
        $listaUsuarios = $this->usuarioModel->listarUsuarios();
        include 'views/lista-usuarios.php';
}

}

// Exemplo de uso
$usuarioController = new UsuarioController();
