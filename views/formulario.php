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
        <ul>
            <?php foreach ($usuarios as $usuario) : ?>
                <li>
                    <?php echo "{$usuario->nome} {$usuario->sobrenome}, {$usuario->idade} anos"; ?>
                    <a href="editar.php?id=<?php echo $usuario->id; ?>">Editar</a>
                    <a href="excluir.php?id=<?php echo $usuario->id; ?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>