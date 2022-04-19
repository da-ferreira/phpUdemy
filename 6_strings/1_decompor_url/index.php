
<?php

$url = "https://www.google.com";
$arrayUrl = parse_url($url);

print_r($arrayUrl);
print_r(parse_url('http://username:password@hostname:9090/path?arg1=value1&arg2=value2#anchor'));
