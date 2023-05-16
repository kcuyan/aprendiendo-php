<h1>Gestión de Productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    crear producto
</a>

<!-<!-- producto message -->
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<strong class="alert_green"> El producto se ha creado correctamente </strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
<strong class="alert_red"> El registro no se ha creado correctamente </strong>

<?php endif; ?>
<?php Utils::deleteSession("producto"); ?>


<!-- borrar producto message -->

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<strong class="alert_green"> El producto se ha eliminado correctamente </strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
<strong class="alert_red"> El registro no se ha eliminado</strong>

<?php endif; ?>
<?php Utils::deleteSession("delete"); ?>



<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th> 
        <th>acciones</th>
    <tr>
<?php while($prod = $productos->fetch_object()):?>
    <tr>
        <td><?= $prod->id; ?></td>
        <td><?= $prod->nombre; ?></td>
        <td>Q <?= $prod->precio; ?></td>
        <td><?= $prod->stock; ?></td>
        <td>
            <a href="<?=base_url?>producto/editar&id=<?= $prod->id; ?>" class="button button-gestion">editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?= $prod->id; ?>" class="button button-gestion button-red">eliminar</a>
        </td>
    <tr>

<?php endwhile; ?>

</table>
