<h1>Carrito de la compra</h1>
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito'])>= 1 ): ?>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php
    foreach ($carrito as $indice => $elemento):
        $producto = $elemento['producto'];
        ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null): ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito"/>
                <?php else: ?>   
                    <img src="assets/img/camiseta.png" class="img_carrito"/>
                <?php endif; ?>   
            </td>
            <td><a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a></td>
            <td><?= $producto->precio ?></td>
            <td><?= $elemento['unidades'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $stats = Utils::statsCarrito(); ?>
<br><!-- comment -->
<div class="delete-carrito">
<a href="<?=base_url?>carrito/delete_all" class='button button-delete button-red'>Vaciar Carrito</a>
</div>
<div class='total-carrito'>
    <h3>Total a pagar: Q <?= $stats['total'] ?></h3>
    <a href="<?=base_url?>pedido/hacer" class='button button-pedido'>Hacer pedido</a>
</div>

<?php else:?>

<p>El carrito esta vacio, añade productos</p>

 <?php endif; ?>  