<?php

use Calculator as GlobalCalculator;

class Calculator{
    static public $result;
    static function add($a, $b){
        self::$result = $a +$b;
    }
}
Calculator::add(80, 4);

echo Calculator::$result . PHP_EOL;

?>