<?php

class Calculator{
    public $a;
    public $b;
    public $results;

    public function setA($a){
      $this->a = $a;
    }
    public function getA(){
     return $this->a;
    }

    
    public function setB($b){
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


$sum = new Calculator();
$sum->setA(10);
echo "A = " . $sum->getA() . "<br>";
$sum->setB(90);
echo "B = " . $sum->getB() . "<br>";

$sum->getResults();



?>