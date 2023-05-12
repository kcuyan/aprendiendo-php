<?php

//CAPTURAR Excepciones, en codigo susceptible a errores

try{
    
    if(isset($_GET['id'])){
        echo"<h1>El parametro es: {$_GET['id']}";
    }  else {
        throw new Exception("Faltan parametros por la URL");
    }
    
} catch (Exception $e) {

    echo "ha habido un error: ".$e->getMessage();
    
} 
