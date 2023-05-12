<?php

abstract class Ordenador {
    
    public $encendido;
       
    abstract public function enceder();
    
    public function apagar(){
        $this->encendido = false;        
    }
    
    
}

class PcAsus extends Ordenador {
    
    public $software;
    
    public function arrancarSoftware(){
        $this->software = true;
    }
    
    public function enceder() {
        $this->encendido = true;
    }
}


$ordenador = new PcAsus();

$ordenador->arrancarSoftware();
$ordenador->enceder();
$ordenador->apagar();

var_dump($ordenador);