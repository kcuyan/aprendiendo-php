<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <br>
    <p>    
        Tu pedido ha sido guardado con exito, una vez que realices la transferencia 
        bancaria a la cuenta 165132165213215 con el coste del pedido, sera procesado y enviado.    
    </p>
    <br>
    <?php if (isset($pedido)): ?>
        <h3>Datos del pedido:</h3>
        Numero de pedido: <?= $pedido->id ?> <br>
        Total a pagar: Q <?= $pedido->coste ?> <br>
        Productos: <br>
        
        <?php while ($producto = $productos->fetch_Object()): ?>
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </tr>
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
                    <td><?= $producto->unidades ?></td>
                </tr>
            </table>
        <?php endwhile; ?>        
    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido no ha podido ser procesado</h1>
    <br>
    <p>    
        Te invitamos a validar que todos los datos sean correctos.
    </p>
<?php endif; ?>
