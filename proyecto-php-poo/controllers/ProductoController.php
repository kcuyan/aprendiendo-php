<?php

class productoController{
    public function index(){
        //renderizar vista
        require_once 'views/producto/destacado.php';
    }
    
    public function gestion() {
        Utils::isADmin();
        require_once 'views/producto/gestion.php';
    }
    
}