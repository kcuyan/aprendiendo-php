<?php
require_once 'coche.php';

$coche = new Coche("rojo", "Lamborgini", "Aventador", 300, 200, 5);


$coche->color = "Rosa";

$coche->setMarca("audi");

echo $coche->mostrarInformacion($coche);

//var_dump($coche->getModelo());