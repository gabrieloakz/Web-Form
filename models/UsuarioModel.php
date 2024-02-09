<?php

class UsuarioModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirUsuario($nome, $sobrenome, $idade) {
        $sql = "INSERT INTO usuarios (nome, sobrenome, idade) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $nome, $sobrenome, $idade);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Implemente métodos para atualizar, excluir e listar usuários conforme necessário

    // Exemplo de método para listar usuários
    public function listarUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);

        $usuarios = array();

        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }

        return $usuarios;
    }
}

?>
