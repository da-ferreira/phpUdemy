
<?php

$array = range(10, 45);

foreach ($array as $item) {
    $soma = $item + 6;

    if ($soma <= 30) {
        printf("%d\n", $soma);
    } else {
        printf("O número %d é muito alto\n", $soma);
    }
}
