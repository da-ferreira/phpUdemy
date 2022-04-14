
<?php

$a = (int) "12";
$b = (float) "1.1345";
$c = (double) "13.22";

$d = (int) "string";

echo gettype($a), "\n";  # integer
echo gettype($b), "\n";  # double
echo gettype($c), "\n";  # double
echo $d, "\n";  # 0
