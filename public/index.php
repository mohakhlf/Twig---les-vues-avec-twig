<?php
require '../vendor/autoload.php';
$products = ['coco', 'shit', 'marijuana', 'MDMA', 'LSD'];



$loader = new Twig\Loader\FilesystemLoader('../src/view');
$twig = new Twig\Environment($loader, array('debug'=> true));
$twig->addExtension(new \Twig\Extension\DebugExtension());
echo $twig->render('index.html.twig', array('products' => $products));
