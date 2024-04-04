<?php 

include "ejercicio1/Persona.php"; 
include "ejercicio1/User.php"; 
include "ejercicio1/Admin.php"; 



$user = new User; 
$user->type = new Admin; 
echo $user->type->greet(); 