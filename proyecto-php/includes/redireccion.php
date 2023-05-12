<?php
//INICIAR LA SESION
if(!isset($_SESSION)){
    session_start();
}


if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}