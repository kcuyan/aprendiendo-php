<?php

//HERENCIA, la posibilidad de compartir atributos y metodos entre clases

class Persona {
    
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar(){
        return "Estoy hablando";
    }
    
    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{
    
    public $lenguajes;
    public $experienciaProgramador;
    
    public function __construct() {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }


    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
    }

        public function programar(){
        return "Soy Programador";
    }
    
    public function repararOrdenador(){
        return "Reparar ordenadores";
    }
    
    public function hacerOfimaticaa(){
        return "Estoy escribiendo word";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciEnRedes;
    
    public function __construct() {
        parent::__construct();
        $this->auditarRedes = "Experto";
        $this->experienciEnRedes = 5;
    }


    public function auditoria(){
        return "Estoy auditando una red";
    }
}
