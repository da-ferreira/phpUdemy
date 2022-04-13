
<?php

$x = 10;
$y =& $x;  # y aponta para o mesmo local da memória que 'x'

echo "x: {$x}, y: {$y}\n";

$y = "teste";

echo "x: {$x}, y: {$y}\n";
