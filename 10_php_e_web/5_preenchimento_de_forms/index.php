
<?php

$usuario = [  # Dado mockado
    'nome' => 'Felipe',
    'idade' => 19,
    'profissao' => 'Programador'
];

if (isset($usuario)) {
    extract($usuario);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de formulários com dados da requisição</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Informe seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Informe sua idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Informe sua profissão" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
