<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);
$name = getenv("NAME");


echo $twig->render('tpl.html', array('name' => $name));
