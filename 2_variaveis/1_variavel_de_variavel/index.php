
<?php

$abc = "teste";
$$abc = 10;  # Será criada uma variável 'teste' com valor '10'

echo "{$abc}, {$teste}";
