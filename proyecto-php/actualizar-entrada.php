<?php
//cargar conexion bases de datos
require_once 'includes/conexion.php';

if (isset($_SESSION['usuario']) && isset($_GET['id']) && isset($_POST)){
    
$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
$entrada_id = isset($_GET['id']) ? (int)$_GET['id'] : false;
$usuario_id = $_SESSION['usuario']['id'];
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

//comprobar categoria
if(empty($entrada_id) && !is_numeric($entrada_id)){
    
    $errores['errores']['general'] = "El id no es valido";
};



if(count($errores) == 0){
    $sql = "UPDATE entradas SET titulo='$titulo',categoria_id='$categoria', descripcion='$descripcion', fecha=CURDATE() "
            . "WHERE usuario_id = $usuario_id AND id = $entrada_id;";
    $actualizar = mysqli_query($db, $sql);
   
    
    if($actualizar){
            $_SESSION['actualizado'] = "Tus datos se han actualizados con éxito!!";    
            
        }else{
            $_SESSION['errores']['general']="Fallo al actualizar tus datos!!";
           
        }   
    header("Location: editar-entrada.php?id=$entrada_id");
    
}else{    
    $_SESSION["errores_entrada"] = $errores;
    
    header("Location: editar-entrada.php?id=$entrada_id");
}    
    
    
}