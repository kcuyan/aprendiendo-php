<?php

class Usuario{
    
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}


$usuario = new Usuario();
echo $usuario::URL_COMPLETA."<br>";
echo Usuario::URL_COMPLETA;
var_dump($usuario);