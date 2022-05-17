<?php
if (!empty($_POST) && $_POST["form"] == 3 && $_POST["text1"] != null && $_POST["text2"] != null && $_POST["text3"] != null && $_POST["text4"] != null) {
    $surname = $_POST["text1"];
    $name = $_POST["text2"];
    $age = $_POST["text3"];
    $mail = $_POST["text4"];

    $human = array("Surname"=>$surname, "Name"=>$name, "Age"=>$age, "E-mail"=>$mail);
    echo '<table border = "1">';
    foreach($human as $key => $val)
    {
        echo '<tr><td>';
        echo $key;
        echo '</td><td>';
        echo $val;
        echo '</td></tr>';
    }
    echo'</table>';

}