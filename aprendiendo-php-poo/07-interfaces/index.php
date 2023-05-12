<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        return "lo que sea";
    }
    public function apagar() {
        return "lo que sea";
    }
    public function reiniciar() {
        return "lo que sea";
    }
    public function desfragmentar() {
        return "lo que sea";
    }
    public function detectarUSB() {
        return "lo que sea";
    }


}

$maquintosh = new iMac();
$maquintosh->setModelo("Macbook PRO 2019");
var_dump($maquintosh);
