<?php
if(isset($_POST)){    
//cargar conexion bases de datos
require_once 'includes/conexion.php';

$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;


//Array de errores

   $errores = array();

//Validar los datos antes de guardarlos
   //Validar campo nombre
if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
        
    }  else {
        
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
        
    }

    if(count($errores) == 0){       
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";       
        $guadarCategoria = mysqli_query($db, $sql);
        
        header("Location: index.php");
        
    }  else {
        
         $_SESSION["errores_categoria"] = $errores;
         
         header("Location: crear-categoria.php");
        
    }

}

