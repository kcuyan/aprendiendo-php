<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "kcuyan", "M1gu3l2015", "phpmysql");

//comprobar si la conexión es correcta
if(mysqli_connect_errno()){
    echo "La Conexion a la base de datos MySQL ha fallado:".mysqli_connect();
}else {
    echo "Conexion realizada correctamente";
}

// Consulta para configurar la codificación de caracteres

mysqli_query($conexion, "SET NAMES 'utf8");

// consulta SELECT desde PHP

$query = mysqli_query($conexion, "SELECT * FROM notas");
//$notas = mysqli_fetch_assoc($query);
// Recorrer registros
while ($nota = mysqli_fetch_assoc($query)){   
  var_dump($nota);
  echo "<h2>".$nota['titulo']."</h2>";
  echo $nota['descripcion']."</br>";
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(null, 'nota desde PHP', 'esto es una nota desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
}else{
    echo "Error: ".mysqli_error($insert);
}