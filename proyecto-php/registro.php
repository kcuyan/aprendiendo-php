<?php
if(isset($_POST)){    
//cargar conexion bases de datos
require_once 'includes/conexion.php';

//Iniciar sesion
if(!$_SESSION){
    session_start();
}

//Recoger los calores del formulario de registro
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : FALSE;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : FALSE;
$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : FALSE;
$password = isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : FALSE;

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
 
    
    //Validar campo apellido
if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }  else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }
    
    //Validar campo email
if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }  else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }
    
    
    
    //Validar campo contraseña
if(!empty($password)){
        $password_validada = true;
    }  else {
        $password_validada = false;
        $errores['password'] = "la contraseña esta vacia";
    }
    
    
    //GUARDAR USUARIO EN BD
    
    $guardar_usuario = false;    
    if(count($errores) == 0){
        $guardar_usuario = true;
        
        //CIFRAR LA CONTRASEÑA        
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
         //INSERTAR USUARIOS EN LA TABLA DE USUARIOS
        
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
        //var_dump(mysqli_error($db));
       // die();
        
        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        }else{
            $_SESSION['errores']['general']="Fallo al guardar el usuario!!";
        }
         
   }else{
       $_SESSION['errores'] = $errores;
   }    
}

header('Location: index.php');