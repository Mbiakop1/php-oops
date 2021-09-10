<?php

class Student {
    public $studentid;
    public $studentName;


    public function examResults($studentSubject1, $studentSubject2, $studentSubject3){
        $numSubjectsPass = 0;
        if($studentSubject1 >= 35){
            $numSubjectsPass += 1;
        }

        if($studentSubject2 >= 35){
            $numSubjectsPass += 1;
        }

        if($studentSubject3 >= 35){
            $numSubjectsPass += 1;
        }

        $totalMarks = $studentSubject1 + $studentSubject2 + $studentSubject3;

        if($numSubjectsPass < 3){
            echo "$this->studentName You failed, You passed $numSubjectsPass out of 3 and your total mark is $totalMarks on 300" . PHP_EOL;
        } else {
            echo "$this->studentName Congrats, You passed $numSubjectsPass out of 3 and your total mark is $totalMarks on 300" . PHP_EOL;

        }
      
    }


}


  $result1 = new Student();
  $result1->studentName = "clinton";
  $result1->studentid = 23;
  $maths = 35;
  $physics = 70;
  $chemistry = 55;
  $result1->examResults($maths, $physics, $chemistry);

  echo "<br><br>";

  
  $result2 = new Student();
  $result2->studentName = "joe";
  $result2->studentid = 23;
  $maths = 35;
  $physics = 20;
  $chemistry = 55;
  $result2->examResults($maths, $physics, $chemistry);


  
?>