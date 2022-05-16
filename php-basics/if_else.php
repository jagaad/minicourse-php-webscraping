<?php

//echo $argv[1];

/*
$a = '1';
$b = $argv[1];
*/

// https://www.php.net/manual/en/language.operators.comparison.php
/*
if ($a === $b) {
    // operation
    echo 'yes, $a is equals $b';
} else {
    echo 'nop, $a is NOT equals $b';
}
*/

/*
$input = $argv[1];
if ($input == 'Lucas') {
    echo 'This is your name :)';
} elseif ($input == 'de Oliveira') {
    echo 'This is your last name :)';
} else {
    echo "I can not handle this input: $input";
}
*/

$input = $argv[1];

switch ($input) {
    case 'Lucas':
        // operation
        echo 'This is your name';
        break;
    case 'de Oliveira':
        echo 'This is your last name';
        break;
    default:
        echo "I can not handle this input: $input";
        break;
}

