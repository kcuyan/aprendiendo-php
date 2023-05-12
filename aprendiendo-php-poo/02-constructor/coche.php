
<?php
//PROGRAMACION ORIENTADA A OBJETOS EN PHP POO

//definir una clase - molde para crear mas objetos de tipo coche con caracteristicas parecidas

class Coche{
    
    //Atributos o Propiedades (variables)
    
    //public se puede acceder, desde cualquier lugar, dentro de clase actual, dentro de clases que ereden o fuera de la clase
    public $color;
    
    //protected podemos acceder desde la clase que los define y desde clases que hereden
    protected $marca;
    
    //private unicamente se pueden acceder desde esta clase.
    private $modelo;    
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    //CONSTRUCTOR    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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
    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function getModelo(){
        return $this->modelo;
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
    
    public function  mostrarInformacion(Coche $miObjeto){
        
        if(is_object($miObjeto)) {       
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion.= "Color: ".$miObjeto->color;
        $informacion.= "</br> Modelo: ".$miObjeto->modelo;
        $informacion.= "</br> Velocidad: ".$miObjeto->velocidad;
        }else{          
            
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
    
} // FIN DEFINICIO DE LA CLASE

