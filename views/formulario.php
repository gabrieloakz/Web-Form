<?php
require_once('../controllers/UserController.php');

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    $userController->cadastrarUsuario($nome, $sobrenome, $idade);
}

$usuarios = $userController->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulário de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Cadastro de Usuário</h2>

        <!-- Formulário -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Lista de Usuários -->
        <h2 class="mt-4">Lista de Usuários</h2>
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario->nome; ?></td>
                        <td><?php echo $usuario->sobrenome; ?></td>
                        <td><?php echo $usuario->idade; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $usuario->id; ?>">Editar</a>
                            <a href="excluir.php?id=<?php echo $usuario->id; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>
