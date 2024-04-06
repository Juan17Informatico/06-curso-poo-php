<?php 

namespace App\Maths; 

class Calculator{

    protected $num1; 
    protected $num2; 

    public function __construct($num1, $num2)
    {   
        $this->num1 = $num1; 
        $this->num2 = $num2; 

    }

    public function getAdditionResult(){
        return ($this->num1 + $this->num2);
    } 

    public function getSubtractionResult(){
        return ($this->num1 - $this->num2);
    } 

    public function getMultiplicationResult(){
        return ($this->num1 * $this->num2);
    } 

    public function getDivisionResult(){
        return ($this->num1 / $this->num2);
    } 

}