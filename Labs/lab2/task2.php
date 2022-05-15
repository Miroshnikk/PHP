<?php
if (!empty($_POST) && $_POST["form"] == 2 && $_POST["text1"] != null && $_POST["text2"] != null) {

    $first = $_POST["text1"];
    $second = $_POST["text2"];
    echo "<br>";
    if ($first > $second){
        echo $first;
    }
    elseif ($first < $second)
    {
        echo  $second;
    }
    else {
        echo"Числа не рівні.";
    }
}
