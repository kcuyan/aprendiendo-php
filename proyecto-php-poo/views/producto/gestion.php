<h1>Gestión de Productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    crear producto
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<strong class="alert_green"> El producto se ha creado correctamente </strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
<strong class="alert_red"> El registro no se ha creado correctamente </strong>

<?php endif; ?>
<?php Utils::deleteSession("producto"); ?>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th> 
    <tr>
<?php while($prod = $productos->fetch_object()):?>
    <tr>
        <td><?= $prod->id; ?></td>
        <td><?= $prod->nombre; ?></td>
        <td>Q <?= $prod->precio; ?></td>
        <td><?= $prod->stock; ?></td>
    <tr>

<?php endwhile; ?>

</table>
