<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?> 


<!-- CAJA PRINCIPAL -->
 <div id="principal">
 <h1>Crear entradas</h1>  
 <p>
     Añade nuevas entradas al blog para que los demas usuario puedan leerlas.
 </p><br>
 <form action="guardar-entrada.php" method="POST">
     <label for="titulo">Titulo</label>
     <input type="text" name="titulo" placeholder="Ingresar el titulo para la entrada"/>
     <?php echo isset($_SESSION['errores_entrada']) ? mostarError($_SESSION['errores_entrada'], 'titulo') : '';?>
     
     <label for="descripcion">Descripción</label>
     <textarea name="descripcion"></textarea>
     <?php echo isset($_SESSION['errores_entrada']) ? mostarError($_SESSION['errores_entrada'], 'descripcion') : '';?>
     
     <label for="categoria">Categoria</label>
     <select name="categoria">         
         <?php 
         $categorias = conseguirCategorias($db);
         if(!empty($categorias)):
            while($categoria = mysqli_fetch_assoc($categorias)):
           ?>    
         <option value="<?=$categoria['id']?>">
             <?= $categoria['nombre'] ?>
         </option>
         <?php       
            endwhile;    
        endif;;
         ?>
     </select>
     <?php echo isset($_SESSION['errores_entrada']) ? mostarError($_SESSION['errores_entrada'], 'categoria') : '';?>
     
     <br>        
     <input type="submit" value="Guardar"/>
 </form>
 <?php borrarErrores();?>
 
 </div>
                
                
<?php require_once 'includes/pie.php'; ?>