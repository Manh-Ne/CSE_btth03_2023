<?php
require_once __DIR__ . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader);
echo $twig->render('template_name.twig', array('variable_name' => 'variable_value'));
?>