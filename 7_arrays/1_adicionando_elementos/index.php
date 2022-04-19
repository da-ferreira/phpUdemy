
<?php

$arr = [];
print_r($arr);

$arr[0] = 10;
$arr[5] = 12;
print_r($arr);

$arr[] = "David";  # Adiciona no fim do array (seguindo a seguencia da última chave)
print_r($arr);

foreach ($arr as $item) {
    echo $item, "\n";  # 10, 12, "David"
}
