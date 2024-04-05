<?php 

class User{
    public $name; 
    public $edad;

    public function __construct($name, $edad)
    {
        $this->name = $name; 
        $this->edad = $edad; 
    }

    //Final con esta palabra reservada evitamos que el siguiente metodo se sobreescriba
    final public function getName(){
        return $this->name;
    }

    public function getEdad(){
        return $this->edad;
    }
}


class Admin extends User{

}

$admin = new Admin("Juan",15); 
echo $admin->getName() . " " . $admin->getEdad(); 