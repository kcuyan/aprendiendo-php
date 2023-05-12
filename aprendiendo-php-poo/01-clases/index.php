<h1>ok</h1>
<?php
//PROGRAMACION ORIENTADA A OBJETOS EN PHP POO

//definir una clase - molde para crear mas objetos de tipo coche con caracteristicas parecidas

class Coche{
    
    //Atributos o Propiedades (variables)
    public $color = "rojo";
    public $marca = "Lamborgini";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    //metodos (funciones) son acciones que hace el objeto
    
    public function getColor(){        
        return $this->color;       
    }
    
    public function setColor($color){        
        $this->color = $color;        
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }


    public function  acelerar(){
        $this->velocidad++;
    }
    
    public function  frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
} // FIN DEFINICIO DE LA CLASE


//Crear un objeto / instanciar la clase

$coche = new Coche();

// usar los metodos

$coche->setColor('verde');

echo "El color del coche es ". $coche->getColor().'<br>';
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo $coche->getVelocidad();