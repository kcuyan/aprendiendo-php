<?php
if(isset($_POST)){    
    
//cargar conexion bases de datos
require_once 'includes/conexion.php';

//Recoger los calores del formulario de actualizacion
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : FALSE;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : FALSE;
$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : FALSE;
$usuario = $_SESSION['usuario']['id'];
//$password = isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : FALSE;

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
            //GUARDAR USUARIO EN BD    
    $guardar_usuario = false;    
    if(count($errores) == 0){
        $guardar_usuario = true;   
        
            // COMPROBAR SI EL EMAIL YA EXISTE    
    $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);
   
    if($isset_user['id'] == $usuario || empty($isset_user)){
        //actualizar informacion
        $sql = "UPDATE usuarios SET nombre='$nombre', "
                . "apellidos='$apellidos', "
                . "email='$email' "
                . "WHERE id=$usuario;";      
        $actualizar = mysqli_query($db, $sql);
        
        if($actualizar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['actualizado'] = "Tus datos se han actualizadi con éxito!!";    
            
        }else{
            $_SESSION['errores']['general']="Fallo al actualizar tus datos!!";
           
        }   
    }  else {
        
        $_SESSION['errores']['general']="El usuario ya existe!!";
        
    }
         
   }else{
       $_SESSION['errores'] = $errores;
        
   }    
   
   
}

   header('Location: mis-datos.php');