<?php

require __DIR__ . '/vendor/autoload.php';

$key = $_GET["key"];

if (empty($key)) {
    echo 'Error, key not set';
    return;
}

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);
$value = $client->get($key);

if (empty($value)) {
    echo 'Error, can not find specify key';
    return;
}

echo $value;
exit(0);