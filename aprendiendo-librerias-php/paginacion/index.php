<?php
require_once '../vendor/autoload.php';

//conexion bd
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8");

//Consulta para contar elementos totales
//OPCION 1
//$consulta = $conexion->query("SELECT * FROM notas");
//$numero_elementos = $consulta->num_rows;

//OPCION 2 - MEJOR
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;

//numero de lementos por pagina
$numero_elementos_pagina = 4;

//Hacer paginacion
$pagination = new Zebra_Pagination();

//Numero total de elementos a paginar
$pagination->records($numero_elementos);

//numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$pagina=$pagination->get_page();
$pagina=($pagina-1)*$numero_elementos_pagina;

$sql = "SELECT *FROM notas LIMIT $pagina , $numero_elementos_pagina;";
$notas = $conexion->query($sql);

//Estilos de paginacion
echo '<link rel="stylesheet" href="../vendor//stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object()){
    echo"<h1>{$nota->id} - {$nota->titulo}</h1>";
    echo"<h3>{$nota->descripcion}</h3><hr/>";   
    
}

$pagination->render();



