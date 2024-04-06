<?php 

use PHPUnit\Framework\TestCase; 
use App\Maths\Calculator; 


class CalculatorTest extends TestCase{
    
    public function test_addition(){
        $calculator = new Calculator(3, 2); 

        $this->assertEquals(5, $calculator->getAdditionResult()); 
        $this->assertEquals(1, $calculator->getSubtractionResult()); 
        $this->assertEquals(6, $calculator->getMultiplicationResult()); 
        $this->assertEquals(1.5, $calculator->getDivisionResult()); 
    }

}
