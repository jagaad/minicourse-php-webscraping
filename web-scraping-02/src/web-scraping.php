<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Goutte\Client;

$client = new Client();

$crawler = $client->request('GET', 'https://wiki.php.net/rfc');
$crawler
    ->filter('#under_discussion ~ .level2:first-child a')
    ->each(function ($node) {
        echo $node->text() . PHP_EOL;
    });
