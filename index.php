<?php

require_once "Gelo.php";

$estadoGelo = new Gelo();
$estadoGelo->material = 'Água';
$estadoGelo->forma = 'Quadrado';
$estadoGelo->cor = 'Amarelo';

$estadoGelo->getEstado();

$estadoGelo->esquentarGelo();
$estadoGelo->esquentarGelo();
$estadoGelo->esquentarGelo();
$estadoGelo->esquentarGelo();
$estadoGelo->esquentarGelo();

$estadoGelo->getEstado();

echo "<pre>";
print_r($estadoGelo);