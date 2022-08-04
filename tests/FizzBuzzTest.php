<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Task\FizzBuzz;

class FizzBuzzTest extends TestCase{
    protected $periodicalOutput = [1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz',11,'Fizz',13,14,'FizzBuzz'];

    protected function setUp(): void
    {
        $this->fb = new FizzBuzz;
    }

    public function testInputParameters(){
        try {
            $oL = $this->fb->generateList(-1,100);
            $oL = $this->fb->generateList(10,9);

            $this->fail("An exception should have been thrown");
        }
        catch (Exception $e){
            $this->assertStringStartsWith('Incorrect input parameters', $e->getMessage());
        }
        

    }

    public function testOutputValidity(){
        $start = 101;
        $end = 200;
        $oL = $this->fb->generateList($start, $end);

        $shift = $start % 15; 

        for ($i = 0; $i <= $end - $start;)
        {
            $valueToAdd = floor(($start + $i) / 15) * 15;  
            $indexInPeriodicalOutput = ($i + $shift - 1) % 15;
            if (!is_numeric($oL[$i]))
                $this->assertEquals($oL[$i],$this->periodicalOutput[$indexInPeriodicalOutput]);
            else   
                $this->assertEquals($oL[$i],$this->periodicalOutput[$indexInPeriodicalOutput] + $valueToAdd);
            $i++;
        }


    }

}