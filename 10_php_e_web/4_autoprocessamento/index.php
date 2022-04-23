
<?php

$method = $_SERVER['REQUEST_METHOD'];
$nome = isset($_POST['nome']) ? $_POST['nome'] : "Não informado";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoprocessamento de páginas</title>
</head>
<body>
    <?php
    if ($method == 'GET') :
        ?>

        <form action="." method="POST">
            <div>
                <input type="text" name="nome" placeholder="Informe seu nome">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>

        <?php
    else :
        ?>

        <h1>O seu nome é <?= $nome; ?></h1>

        <?php
    endif;
    ?>
</body>
</html>
