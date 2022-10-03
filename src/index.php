<?php

require_once 'vendor/autoload.php';

$rounds[] = new Round( 'Player 1', '1m ','500ms ','P-Modell' , '12.09.2022 ');
$rounds[] = new Round( 'Player 2', '10m ','5000ms ','Dart' , '10.09.2022 ');
$rounds[] = new Round( 'Player 3', '100m ','50000ms ','Corvin' , '12.09.2022 ');


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', ['round' => $rounds]);