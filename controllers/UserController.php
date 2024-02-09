<?php
require_once('../class/Database.php');
require_once('../models/UserModel.php');

class UserController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function cadastrarUsuario($nome, $sobrenome, $idade) {
        $sql = "INSERT INTO usuarios (nome, sobrenome, idade) VALUES ('$nome', '$sobrenome', '$idade')";
        $result = $this->db->conn->query($sql);

        return $result;
    }

    public function listarUsuarios() {
        $usuarios = array();
        $sql = "SELECT * FROM usuarios";
        $result = $this->db->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new UserModel();
                $user->id = $row['id'];
                $user->nome = $row['nome'];
                $user->sobrenome = $row['sobrenome'];
                $user->idade = $row['idade'];
                $usuarios[] = $user;
            }
        }

        return $usuarios;
    }

    public function obterUsuario($id) {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $this->db->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            $user = new UserModel();
            $user->id = $row['id'];
            $user->nome = $row['nome'];
            $user->sobrenome = $row['sobrenome'];
            $user->idade = $row['idade'];

            return $user;
        }

        return null;
    }

    public function atualizarUsuario($id, $nome, $sobrenome, $idade) {
        $sql = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', idade='$idade' WHERE id=$id";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function excluirUsuario($id) {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }
}
?>
