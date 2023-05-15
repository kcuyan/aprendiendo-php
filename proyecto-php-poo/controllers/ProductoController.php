<?php

require_once 'models/producto.php';

class productoController {

    public function index() {
        //renderizar vista
        require_once 'views/producto/destacado.php';
    }

    public function gestion() {
        Utils::isADmin();
        $producto = new Producto();
        $productos = $producto->getAllProductos();
        require_once 'views/producto/gestion.php';
    }

    public function crear() {
        Utils::isADmin();
        require_once 'views/producto/crear.php';
    }

    public function save() {
        Utils::isADmin();
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
            
            if($nombre && $descripcion && $precio && $stock && $categoria){
                
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria_id($categoria); 
                $save = $producto->save();
                
                if($save){
                    $_SESSION['producto'] = "Complete";
                }else{
                    $_SESSION['producto'] = "failed";
                }
            }else{
                $_SESSION['producto'] = "failed";
            }
        }else{
            $_SESSION['producto'] = "failed";
        }
        
        header('Location:'.base_url.'producto/gestion');
    }

}
