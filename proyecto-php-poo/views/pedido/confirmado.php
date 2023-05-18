<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>
<h1>Tu pedido se ha confirmado</h1>
<br>
<p>    
    Tu pedido ha sido guardado con exito, una vez que realices la transferencia 
    bancaria con el coste del pedido, sera procesado y enviado.    
</p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'):?>
<h1>Tu pedido no ha podido ser procesado</h1>
<br>
<p>    
    Te invitamos a validar que todos los datos sean correctos.
</p>
<?php endif;?>
