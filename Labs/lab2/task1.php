<?php
if(!empty($_POST) && $_POST["form"]==1 && $_POST["text1"]!=null && $_POST["text2"]!=null) {

    $first = $_POST["text1"];
    $second = $_POST["text2"];
    echo"<br>";
    echo "$first + $second = ", $first + $second, "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo "$first - $second = ", $first - $second, "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo "$first * $second = ", $first * $second, "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo "$first / $second = ", $first / $second, "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo "$first % $second = ", $first % $second, "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
}