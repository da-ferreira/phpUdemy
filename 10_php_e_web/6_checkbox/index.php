
<?php

isset($_POST['ingredientes']) ? print_r($_POST['ingredientes']) : null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="." method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
            <input type="checkbox" name="ingredientes[]" value="Limão"> Limão
            <input type="checkbox" name="ingredientes[]" value="Aborora"> Aborora
            <input type="checkbox" name="ingredientes[]" value="Uva"> Uva
            <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
