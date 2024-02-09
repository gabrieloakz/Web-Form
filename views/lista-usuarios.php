<!-- lista-usuarios.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="caminho/para/bootstrap.min.css"> <!-- Certifique-se de fornecer o caminho correto para o Bootstrap -->
</head>
<body>

<div class="container mt-5">
    <h2>Lista de Usuários</h2>

    <!-- Tabela para exibir a lista de usuários -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Laço para percorrer a lista de usuários e exibir cada linha na tabela
            foreach ($listaUsuarios as $usuario) {
                echo "<tr>";
                echo "<td>{$usuario['id']}</td>";
                echo "<td>{$usuario['nome']}</td>";
                echo "<td>{$usuario['sobrenome']}</td>";
                echo "<td>{$usuario['idade']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
