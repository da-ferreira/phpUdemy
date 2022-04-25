
<?php

setcookie("nome", "David", time() + 3600);  # Expira em 1h
$nome = isset($_COOKIE['nome']) ? $_COOKIE['nome'] : null;

print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>

    <?php if ($nome != "") : ?>
        <p>Seja bem vindo, <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>
