<?php

require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
    public function index(){
        Utils::isADmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAllCategorias();
        require_once 'views/categoria/index.php';
    }
        
    public function ver(){
        if(isset($_GET['id'])){
            $id = $_GET['id']; 
            
            // Conseguir categoria
            $categoria = New Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
            
            
            //Conseguir Productos
            $productos = New Producto();
            $productos->setCategoria_id($id);
            $productos = $productos->getAllCategory();
        }
        require_once 'views/categoria/ver.php';
    }


    public function crear() {
        Utils::isADmin();
        require_once 'views/categoria/crear.php';
        
    }
    
    public function save() {
        Utils::isADmin();     
    if(isset($_POST) && isset($_POST['nombre'])){
        
    //guardar categoria en db luego redireccionar  
       $categoria = new Categoria();
       $categoria->setNombre($_POST['nombre']);  
       $categoria->saveCategoria();
        
    }
    header("Location:".base_url."categoria/index");
    }
    
}