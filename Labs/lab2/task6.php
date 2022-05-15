<?php
if (!empty($_POST) && $_POST["form"] == 6 && $_POST["text"] != null) {

    $a = $_POST["text"];
    echo "<br>";

    if (is_numeric($a)) {
        echo "Число ціле.";
    } else
        echo "Число не є цілим.";
}