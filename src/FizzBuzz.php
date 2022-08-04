<?php declare(strict_types = 1);

namespace Task;
use PHPUnit\TextUI\XmlConfiguration\File;

class FizzBuzz {

    private array $outputList;
    private int $pointer;

    function __construct (){
        $this->outputList = [];
        $this->pointer = 0;
    }

    /**
     * Genereates a sequence from params by the FizzBuzz game rules
     * 
     *  @param  int $start  First element
     *  @param  int $end    Last element
     * 
     *  @return array   Elements of sequence
     */

    public function generateList(int $start, int $end): array{
        if ($start < 0 || $end <= $start)
            throw new \Exception("Incorrect input parameters");
        
        for ($i = $start; $i <= $end; $i++){
            $output = '';
            if ($i%3 == 0)
                $output .= 'Fizz';
            if ($i%5 == 0)
                $output .= 'Buzz';
            if ($output == '')
                $output = $i;
            $this->outputList[$this->pointer++] = $output;
        }

        return $this->outputList;
    }
}
