<?php 

include  "Admin.php"; 
include  "Guest.php"; 
include  "User.php"; 

abstract class Base {

    protected $name; 

    private function getClassName(){
        return get_called_class(); 
    }

    public function login(){
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}"; 
    }

}









$guest = new Guest();
echo $guest->login(); 

$user = new User("Juan");
echo $user->login(); 

$admin = new Admin("SuperJuan");
echo $admin->login(); 