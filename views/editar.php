<!-- editar.php -->

<?php
require_once('../controllers/UserController.php');

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    $userController->atualizarUsuario($id, $nome, $sobrenome, $idade);

    // Redirecionar para o formulário após a atualização
    header('Location: formulario.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $userController->obterUsuario($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Editar Usuário</h2>

    <!-- Formulário de Edição -->
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario->nome; ?>" required>
        </div>

        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo $usuario->sobrenome; ?>" required>
        </div>

        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $usuario->idade; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

</body>
</html>
