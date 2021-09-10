<?php

use Calculator as GlobalCalculator;

class Calculator{
    static public $result;
    static function add($a, $b) : int{
        $result = $a +$b;
        return $result;
    }
}

Calculator::$result = Calculator::add(2, 4);

echo Calculator::$result . PHP_EOL;

?>