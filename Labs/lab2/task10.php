<?php
if (!empty($_POST) && $_POST["form"] == 10 && $_POST["text1"] != null && $_POST["text2"] != null) {

    $first = $_POST["text1"];
    $second = $_POST["text2"];
    echo "<br>";
    if ($first<$second)
    {
        $start = $first;
        $stop = $second;
    }
    if ($second<$first)
    {
        $start = $second;
        $stop = $first;
    }

    foreach (range($start, $stop) as $number){
    if($number==0){
        break;
    }
    else
        echo "10/$number = ", 10/$number, "<br>";

    }



}
