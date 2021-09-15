<?php

class Calculator{
    public $a;
    public $b;
    public $results;


    
    public function getA(){
     return $this->a;
    }

    function __construct($a = 0, $b = 0)
    {
      $this->a = $a;
      $this->b = $b;

    }

    public function getB(){
     return $this->b;
    }

    public function saveResults(){
        $result = $this->a + $this->b ;
        $this->results = $result;
    }


    public function getResults(){
        $this->saveResults();
        echo "The result of your sum is $this->results" . PHP_EOL;
    }



}


$sum = new Calculator(20, 50);

echo "A = " . $sum->getA() . "<br>";

echo "B = " . $sum->getB() . "<br>";

$sum->getResults();



?>