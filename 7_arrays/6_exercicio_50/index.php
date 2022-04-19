
<?php
$pessoas = [
    'Matheus' => 29,
    'Aléxia' => 25,
    'Pedro' => 24,
    'João' => 43
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 50</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            width: 200px;
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
            padding: 10px;
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($pessoas as $nome => $idade) : ?>
                <tr>
                    <td><?= $nome; ?></td>
                    <td><?= $idade; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
