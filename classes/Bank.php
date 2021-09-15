<?php

class Bank{
    public $accno;
    public $name;
    public $balance = 0;

    public function depositAmount($amt) {
        $this->balance += $amt;
        echo "Your account has been credited, your new balance is: $this->balance";
        }

    public function deductAmount($amt){
        if($this->balance >= $amt){
            $this->balance -= $amt;
            echo "Your account has been deducted, your new balance is: $this->balance";
        } else {
            echo " Operation denied, you have insufficient fund your current account balance is : $this->balance FCFA";
        }
       
    }

    public function checkBalance(){
        echo "Your balance is $this->balance";
    }
}

$userAcc1 = new Bank();
$userAcc1->accno = 111;
$userAcc1->name = "mbiakop";
$userAcc1->balance = 4000000;

echo  "checking the balance " . PHP_EOL;
$userAcc1->checkBalance();

echo "making a deposite " . PHP_EOL;
$userAcc1->depositAmount(500000);

echo " deduct amount" . PHP_EOL ;
$userAcc1->deductAmount(400000);

?>