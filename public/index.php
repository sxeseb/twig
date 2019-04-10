<?php

require_once '../vendor/autoload.php';

$products = ['product1' => ['name' => 'You', 'desc' => 'Poum'],
            'product2' => ['name' => 'Me', 'desc' => 'Tchak'],
            'product3' => ['name' => 'And', 'desc' => 'PoumPoum'],
            'product4' => ['name' => 'The', 'desc' => 'Poum'],
            'product5' => ['name' => 'Violence', 'desc' => 'Tchak']];

$loader = new \Twig\Loader\FilesystemLoader('../src/views/');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig', ['products' => $products]);