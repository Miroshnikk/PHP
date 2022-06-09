<?php
class Calcullator{

    public $firstNum;
    public $secondNum;
    function __construct($firstNum, $secondNum){
        if(is_numeric($firstNum) && is_numeric($secondNum)) {
            $this->firstNum = $firstNum;
            $this->secondNum = $secondNum;
        } else {
            $this->firstNum = null;
            $this->secondNum = null;
        }
    }
    function addition(){
        echo $this->firstNum, '+', $this->secondNum, '=',$this->firstNum + $this->secondNum;
        echo'<br>';
    }
    function subtraction(){
        echo $this->firstNum, '-', $this->secondNum, '=',$this->firstNum - $this->secondNum;
        echo'<br>';
    }
    function division(){
        if($this->secondNum != null) {
            echo $this->firstNum, '/', $this->secondNum, '=',$this->firstNum / $this->secondNum;
            echo'<br>';
        } else {
            echo 'Division by zero is impossible!';
        }
    }
    function divisionByModule(){
        if($this->secondNum != null) {
            echo$this->firstNum, '%', $this->secondNum, '=',$this->firstNum % $this->secondNum;
            echo'<br>';
        } else {
            echo 'Division by zero is impossible!';
        }
    }
    function pow(){
        echo $this->firstNum,'^', $this->secondNum, '=',pow($this->firstNum,$this->secondNum);
        echo'<br>';
    }
    function rootExtraction(){
        if($this->firstNum >= null && $this->secondNum >= null) {
            echo 'sqrt(',$this->firstNum,')', '=',sqrt($this->firstNum);
            echo'<br>';
            echo 'sqrt(',$this->secondNum,')', '=',sqrt($this->secondNum);
        } else {
            echo 'The number is less than zero!';
        }
    }

    function result(){
        $this->addition();
        $this->subtraction();
        $this->division();
        $this->divisionByModule();
        $this->pow();
        $this->rootExtraction();

    }
}

         if (!empty($_POST) && $_POST["form"]==5)
          {
            $result = new Calcullator($_POST["firstNum"], $_POST["secondNum"]);
             $result->result();

           }
