<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="uft-8"/>
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    BLOG DE VIDEOJUEGOS
                </a>
            </div>

        <!-- MENU -->
        
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                    <?php $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                     while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    
                    <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    </li>
                    
                    <?php 
                        endwhile;
                    endif;
                    
                    ?>             
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">contacto</a>
                </li>
            </ul>
        </nav>
        </header>
        
  <div id="contenedor">
