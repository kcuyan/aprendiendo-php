<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?> 


<!-- CAJA PRINCIPAL -->
 <div id="principal">
 <h1>Crear Categorias</h1>  
 <p>
     Añade nuevas categorias al blog para que los demas usuario puedan usarlas al crear sus entradas.
 </p>
 <form action="guardar-categoria.php" method="POST">
     <label for="nombre">Nombre</label><br>
     <input type="text" name="nombre" placeholder="Ingresar nombre para categoria"/>
     <?php echo isset($_SESSION['errores_categoria']) ? mostarError($_SESSION['errores_categoria'], 'nombre') : '';?>  
     
     <input type="submit" value="Guardar"/>
 </form>
 
 
 </div>
                
                
<?php require_once 'includes/pie.php'; ?>