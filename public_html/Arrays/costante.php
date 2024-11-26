<?php
define("NOME", "Nicolas");

echo NOME;
echo "<br>" . PHP_EOL;


// NOME = "Mario"; --> non posso modificare il nome di una costante
$x = 4.3;
$x = (int) $x;
$y = true;
echo gettype(NOME) . "<br>" . PHP_EOL;
echo gettype($x);

echo "<br>" . PHP_EOL;

echo var_dump($x , $y) . "<br>" . PHP_EOL;
echo var_dump(NOME);
?>