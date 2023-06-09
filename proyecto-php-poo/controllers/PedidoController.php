<?php

require_once 'models/pedido.php';

class pedidoController {

    public function hacer() {
        require_once 'views/pedido/hacer.php';
    }

    public function add() {
        if (isset($_SESSION['identity'])) {
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];

            if ($provincia && $localidad && $direccion) {
                //guardar datos en la bd
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                $save = $pedido->save();

                //Guardar linea de pedido
                $save_linea = $pedido->save_linea();

                if ($save && $save_linea) {
                    $_SESSION['pedido'] = "complete";
                } else {
                    $_SESSION['pedido'] = "failed";
                }
            } else {
                $_SESSION['pedido'] = "failed";
            }
            header("Location:" . base_url . "pedido/confirmado");
        } else {
            //redirigir al index
            header("Location:" . base_url);
        }
    }

    public function confirmado() {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = New Pedido();
            $productos = $pedido_productos->getProductByPedido($pedido->id);
        }

        require_once 'views/pedido/confirmado.php';
    }

    public function mis_Pedidos() {
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
        $pedido->setUsuario_id($usuario_id);
        //pedidos de usuario
        $pedidos = $pedido->getAllByUser($usuario_id);

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle() {
        Utils::isIdentity();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            //Obtener el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();
            //obtener el pedido
            $pedido_productos = New Pedido();
            $productos = $pedido_productos->getProductByPedido($id);

            require_once 'views/pedido/detalle.php';
        } else {
            header('Location' . base_url . 'pedido/mis_pedidos');
        }
    }

    public function gestion() {
        Utils::isADmin();
        $gestion = true;
        
        $pedido = new Pedido();
        $pedidos = $pedido->getAllProductos();
        
        require_once 'views/pedido/mis_pedidos.php';
    }
    
    public function estado() {
         Utils::isADmin();
         if(isset($_POST['pedido_id']) && isset($_POST['estado'])){
             //update del pedido
             $id = $_POST['pedido_id'];
             $estado = $_POST['estado'];
             $pedido = new Pedido();
             $pedido->setId($id);
             $pedido->setEstado($estado);
             $pedido->updateOne();
             header("Location:".base_url."pedido/detalle&id=".$id);
         }else{
             header('Location'.base_url);
         }
        
    }

}
