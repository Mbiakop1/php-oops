<?php

class Employee {
    public $name;
    public $id ;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays) : int{
        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->hourlyRate * $this->workingHoursPerDay * $this->workingDays;

        return $salary;
         
    }
}

$emp1 = new Employee();
$emp1->name = "Mbiakop clinton";
$emp1->totalLeaveTaken = 3;
$emp1->id = 90;

$salary = $emp1->getSalaryAmount(20);

echo "$emp1->name has worked for $emp1->workingDays days, he has taken $emp1->totalLeaveTaken leave(s) and his salary is $salary FCFA";