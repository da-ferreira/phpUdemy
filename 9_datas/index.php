
<?php

echo date('d/m/y'), "\n";
echo strtotime('2 months'), "\n";
echo date('d/m/y', strtotime('2 months')), "\n";

date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();
print_r($data);
