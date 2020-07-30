<?php

require __DIR__ . '/vendor/autoload.php';

$name = $_POST['name'];
$message = $_POST['message'];

if (empty($message)) {
    echo 'post message can not be null';
    return;
}

$redisBackend = getenv('REDIS_BACKEND');
$queue = getenv('QUEUE');

Resque::setBackend($redisBackend);

$fullMessageContent = [
    'time' => time(),
    'name' => $name,
    'message' => $message,
];

$jobId = Resque::enqueue($queue, 'Message', $fullMessageContent, true);

echo 'post message success, job id: ' . $jobId;