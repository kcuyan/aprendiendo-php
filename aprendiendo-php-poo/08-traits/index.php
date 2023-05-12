<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>mostrar nombre ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}
class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}
class VideoJuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}


$coche = new Coche();
$coche->nombre = "Ferrari";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Kevin";
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre = "FIFA 22";
$videoJuego->mostrarNombre();

