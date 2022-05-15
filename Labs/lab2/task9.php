<?php

if (!empty($_POST) && $_POST["form"] == 9 && $_POST["text"] != null) {

    $a = $_POST["text"];
    echo "<br>";
    echo "<span style='color:#cb2c2c'> $a * 1 = ", $a, " </span><br>";
    echo "<span style='color:#c9a92a'> $a * 2 = ", $a * 2, "</span><br>";
    echo "<span style='color:#8cc930'> $a * 3 = ", $a * 3, "</span><br>";
    echo "<span style='color:#50e39a'> $a * 4 = ", $a * 4, "</span><br>";
    echo "<span style='color:#146772'> $a * 5 = ", $a * 5, "</span><br>";
    echo "<span style='color:#2376b0'> $a * 6 = ", $a * 6, "</span><br>";
    echo "<span style='color:#6f62a9'> $a * 7 = ", $a * 7, "</span><br>";
    echo "<span style='color:#773498'> $a * 8 = ", $a * 8, "</span><br>";
    echo "<span style='color:#bd18a0'> $a * 9 = ", $a * 9, "</span><br>";
    echo "<span style='color:#961e5e'> $a * 10 = ", $a * 10, "</span><br>";
}