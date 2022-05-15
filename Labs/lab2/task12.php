<?php

if (!empty($_POST) && $_POST["form"] == 12 && $_POST["text"] != null) {
    $a = $_POST["text"];
    $n = 13;

    if  ($a > $n)
    {
        echo "<script>alert(\"Не відгадали. Загадане число менше;)\");</script>";
    }
    if ($a < $n)
    {
        echo "<script>alert(\"Не відгадали. Загадане число більше;)\");</script>";
    };

   if ($a == $n) {
        echo "<p>ПРАВИЛЬНО!</p>";
    }
}