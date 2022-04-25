
<?php

/**
 * @var string $BASE_URL Nome da raíz do sistema. últil para fazer links de imagens e estilos
 */
$BASE_URL = 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

# echo "{$BASE_URL} | {$_SERVER['SERVER_NAME']} | {$_SERVER['REQUEST_URI']}? | " . dirname($_SERVER['REQUEST_URI']);
