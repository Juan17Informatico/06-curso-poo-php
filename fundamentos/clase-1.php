<?php 

class User {

    public $type; 

}


class Admin 
{
    public function greet()
    {
        return "hola Administrador";
    }
}


$user = new User; 
var_dump($user);
$user->type = new Admin; 
echo $user->type->greet();
