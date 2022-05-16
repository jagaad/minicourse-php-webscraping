<?php

//$list = [1, 2, 3, 'Lucas', 4.5, 4, 5, 6, 7];
//var_dump($list);

/*
$map = [
    'person' => [
        'name' => 'Lucas',
        'last_name' => 'de Oliveira',
        'address' => [
            'country' => 'Brazil',
            'state' => 'São Paulo',
            'zip_code' => 123456,
        ],
    ],
    'test' => 1234,
];
// echo $map['test'];
print_r($map);
*/

// Loop

/*
$list = [
    'myKey' => 'test1', 
    20, 
    new stdClass
];

foreach ($list as $key => $item) {
    echo "key: $key" . PHP_EOL;
    var_dump($item);
    echo '---------' . PHP_EOL;
}
*/

$list = ['test1', 'test2', 'test3'];

/*
for ($i = 0; $i < 3; $i++) {
    echo $list[$i] . PHP_EOL;
}
*/

$i = 0;
while ($i < 3) {
    echo $list[$i] . PHP_EOL;
    $i++;
}
