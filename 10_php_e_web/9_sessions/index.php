
<?php

session_start();  # Iniciando as Sessions para ter acesso ao array $_SESSION

$_SESSION['nome'] = "David";
$_SESSION['idade'] = 90;

# session_destroy();  # Destroi os dados da sessão atual

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Session</h1>
</body>
</html>
