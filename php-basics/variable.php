<?php

//echo 'Hello World :)';

$name = 'Lucas';
echo $name . PHP_EOL;

$name2 = 'de Oliveira';
echo $name2 . PHP_EOL;

$name2 = &$name;
echo $name2 . PHP_EOL;

$name2 = 'Lucas02';
echo $name2 . PHP_EOL; // Lucas02
echo $name . PHP_EOL; // Lucas02

$name = 'XPTO';
echo $name . PHP_EOL; // XPTO
echo $name2; // XPTO
