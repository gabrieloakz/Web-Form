<!-- formulario.php -->

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
    <form action="controllers/processa-formulario.php" method="POST">
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
</div>

</body>
</html>
