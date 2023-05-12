<?php

class NotaController{
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        
        //logica del controlador        
        $nota = new Nota();        
        $notas = $nota->conseguirTodos('notas');
        
        //vista
        require_once 'views/nota/listar.php';
    }
    
    
    public function crear(){
        //Modelo
        require_once 'models/nota.php';
        
        //logica
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        $nota->guardar();        
        header("Location:index.php?controller=Nota&action=listar");
        
    }
    
    public function borrar(){
        
    }
    
}
