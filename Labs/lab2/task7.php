<?php

if (!empty($_POST) && $_POST["form"] == 7 && $_POST["text"] != null) {
   //$color = "red";
    $a = $_POST["text"];
    $n = 13;
    if ($a == $n) {
        echo "<p>ПРАВИЛЬНО!</p>";
    } elseif ($a > $n)
    {
        echo '<p style="color: red">Число N - не правильно.</p>Спробуйте ще раз! <br> ПІДКАЗКА: загадане число менше за введене;) ';
    } elseif ($a < $n)
    {
        echo '<p style="color: red">Число N - не правильно.</p>Спробуйте ще раз! <br> ПІДКАЗКА: загадане число більше за введене;) ';
    }
}
