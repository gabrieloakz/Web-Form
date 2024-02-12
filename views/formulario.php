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

    <!-- Adicione as bibliotecas do DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.6/datatables.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.6/datatables.min.js"></script>
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
        <table id="tabelaUsuarios" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->nome; ?></td>
                        <td><?php echo $usuario->sobrenome; ?></td>
                        <td><?php echo $usuario->idade; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Adicione a inicialização do DataTables após a tabela -->
    <script>
        $(document).ready(function() {
            $('#tabelaUsuarios').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "searching": true
            });
        });
    </script>

</body>

</html>