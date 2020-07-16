<?php

require 'vendor/autoload.php';

date_default_timezone_set('GMT');

$redis = getenv("REDIS_BACKEND");
$queue = getenv("QUEUE");

Resque::setBackend($redis);

$args = array(
	'time' => time(),
	'array' => array(
		'test' => 'test',
	),
);

$jobId = Resque::enqueue($queue, 'Job', $args, true);

echo "Queued job ".$jobId."\n\n";