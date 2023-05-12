<?php
require_once 'autoload.php';

//ESPACIOS DE NOMBRES Y PAQUETES NAMESPACES

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
//use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    function informacion(){
        echo __NAMESPACE__;
    }


}

//Objeto principal
$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);

//Comprabar si una clase exsite en un fichero 
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);

//Objeto otro paquete
//$usuario = new UsuarioAdmin();
//var_dump($usuario);


//comprobar si existe una clase
$clase = @class_exists('PanelAdministrador\Usuarios');

if($clase){
    echo "<h1>La Clase si existe</h1>";
}  else {
    echo "<h1>La Clase no existe</h1>";
}