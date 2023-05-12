<?php
if(isset($_POST)){    
//cargar conexion bases de datos
require_once 'includes/conexion.php';

//Obtener datos

$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
$usuario = $_SESSION['usuario']['id'];


//validacion

$errores = array();

//comprobar nombre

if(empty($titulo)){
    $errores['titulo'] = "El titulo no es válido";
};

//comprobar descripcion
if(empty($descripcion)){
    $errores['descripcion'] = "La descrición no es valida";
};

//comprobar categoria
if(empty($categoria) && !is_numeric($categoria)){
    
    $errores['categoria'] = "la categoria no es válida";
}


if(count($errores) == 0){
    $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
    $guardar = mysqli_query($db, $sql);
    header("Location: index.php");
    
}else{    
    $_SESSION["errores_entrada"] = $errores;
    header("Location: crear-entradas.php");
}

}

