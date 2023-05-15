<?php

require_once 'models/categoria.php';

class categoriaController{
    public function index(){
        Utils::isADmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAllCategorias();
        require_once 'views/categoria/index.php';
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