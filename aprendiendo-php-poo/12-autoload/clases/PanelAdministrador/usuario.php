<?php

namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Miguel Cuyan";
        $this->email = "migul@email.com";
    }
}