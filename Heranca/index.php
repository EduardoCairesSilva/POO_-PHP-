<?php

require_once "Funcionario.php";
require_once "Visitante.php";
require_once "Programador.php";
require_once "AnalistaSistemas.php";
require_once "DiretorTI.php";
require_once "Backend.php";
require_once "Frontend.php";

$programador = new Programador();
echo $programador->programar();

$backend = new Backend();
echo $backend->consultarBD();
