<?php

require __DIR__ . '/vendor/autoload.php';

$key = $_GET["key"];
$value = $_GET["value"];

if (empty($key) || empty($value)) {
    echo 'Error, key or value not set';
    return;
}

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);
$res = $client->set($key, $value);

if (!empty($res)) {
    echo "Success";
}