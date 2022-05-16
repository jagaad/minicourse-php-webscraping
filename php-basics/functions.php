<?php

/*
$a = 'test';

$fn = function($name) use ($a) {
    // several lines of code
    echo $a . PHP_EOL;
    echo "Hello $name!";
};

$fn('Lucas');
*/

function nameBuild(string $name, string $lastName): string {
    return "Name: $name \nLast name: $lastName";
}

$fullName = nameBuild('Lucas', 'de Oliveira');

echo $fullName;
