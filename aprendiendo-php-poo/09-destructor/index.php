<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Kevin Cuyan";
        $this->email = "kcuyan@mail.com";
        echo "Instancia del Objeto creada<br/>";
    }
    
    public function __toString() {
        return "HOLA {$this->nombre}, estas registrado con {$this->email}";
    }


    public function __destruct() {
        echo "Destruyendo el objeto";
    }
}

$usuario = new Usuario();

echo $usuario;
for ($i = 0; $i<= 20; $i++){
    echo $i."<br/>";
}
