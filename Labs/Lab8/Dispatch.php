<?php
class Calculator
{
    public $firstNum;
    public $secondNum;

   public function __construct() {
        $this->firstNum = null;
        $this->secondNum = null;
    }

   public function number($firstNum,$secondNum){
        if (is_numeric($firstNum) && is_numeric($firstNum))
        {
            $this->firstNum = $firstNum;
            $this->secondNum = $secondNum;
        } else {
            $this->firstNum = null;
            $this->secondNum = null;
        }
   }

    public function addition(){
        echo $this->firstNum, '+', $this->secondNum, '=',$this->firstNum + $this->secondNum;
        echo'<br>';
    }
    public function subtraction(){
        echo $this->firstNum, '-', $this->secondNum, '=',$this->firstNum - $this->secondNum;
        echo'<br>';
    }
    public function division(){
        if($this->secondNum != null) {
            echo $this->firstNum, '/', $this->secondNum, '=',$this->firstNum / $this->secondNum;
            echo'<br>';
        } else {
            echo 'Division by zero is impossible!';
        }
    }
    public function divisionByModule(){
        if($this->secondNum != null) {
            echo$this->firstNum, '%', $this->secondNum, '=',$this->firstNum % $this->secondNum;
            echo'<br>';
        } else {
            echo 'Division by zero is impossible!';
        }
    }
    public function pow(){
        echo $this->firstNum,'^', $this->secondNum, '=',pow($this->firstNum,$this->secondNum);
        echo'<br>';
    }
    public function rootExtraction(){
        if($this->firstNum >= null && $this->secondNum >= null) {
            echo 'sqrt(',$this->firstNum,')', '=',sqrt($this->firstNum);
            echo'<br>';
            echo 'sqrt(',$this->secondNum,')', '=',sqrt($this->secondNum);
        } else {
            echo 'The number is less than zero!';
        }
    }
}

class Dispatch{
    protected $calculator;
    public function __construct(Calculator $calculator){
        $this->calculator = $calculator;
    }
    public function dispatch()
    {
        if ($_POST["form"]==7 && $_POST["firstNum"]!=null && $_POST["secondNum"]!=null &&
            is_numeric($_POST['firstNum']) && is_numeric($_POST['secondNum']))
        {
            $this->calculator->number($_POST['firstNum'], $_POST['secondNum']);
        }
}

    public function display()
    {
        $this->calculator->addition();
        $this->calculator->subtraction();
        $this->calculator->division();
        $this->calculator->divisionByModule();
        $this->calculator->pow();
        $this->calculator->rootExtraction();

    }
}
$calculator = new Calculator;
$dispatch = new Dispatch($calculator);
$dispatch->dispatch();
$dispatch->display();