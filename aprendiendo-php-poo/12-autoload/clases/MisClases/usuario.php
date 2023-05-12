<?php

namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Kevin Cuyan";
        $this->email = "kevin@email.com";
    }
}