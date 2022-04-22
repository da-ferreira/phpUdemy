
<?php

$nome = isset($_GET['nome']) ? $_GET['nome'] : 'PADRÃO';
$idade = isset($_GET['idade']) ? $_GET['idade'] : 'PADRÃO';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>
</body>
</html>
