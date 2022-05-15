<!DOCTYPE html>
<HTML>
<HEAD>
    <TITLE>Forms</TITLE>
</HEAD>
<BODY>
<FORM method= "POST">
    <INPUT name="form" type="hidden" value="1">
    TASK1
    <br>
    Enter 2 numbers:

    <br><br>
    <INPUT name="text1" type="text" class=text">
    <br><br>
    <INPUT name="text2" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Show result">
</FORM>
<?php
include "task1.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="2" >
    <br><br><br>
    TASK2
    <br>
    Enter 2 numbers:

    <br><br>
    <INPUT name="text1" type="text" class=text">
    <br><br>
    <INPUT name="text2" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Show a larger number">
</FORM>
<?php
include "task2.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="3" >
    <br><br><br>
    TASK3
    <br>
    Введіть свій логін:

    <br><br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Перевірити">
</FORM>
<?php
include "task3.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="5" >
    <br><br><br>
    TASK5
    <br>
    Перевірка числа на парність. Введіть число:

    <br><br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Перевірити">
</FORM>
<?php
include "task5.php"
?>



<FORM method= "POST">
    <INPUT name="form" type="hidden" value="6" >
    <br><br><br>
    TASK6
    <br>
    Перевірка числа на цілість. Введіть число:

    <br><br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Перевірити">
</FORM>
<?php
include "task6.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="7" >
    <br><br><br>
    TASK7
    <br>
    Відгадайте число. Введіть:

    <br><br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Перевірка!">
</FORM>
<?php
include "task7.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="9" >
    <br><br><br>
    TASK9
    <br>
    Таблиця множення. Введіть число:

    <br><br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Вивести таблицю множення">
</FORM>
<?php
include "task9.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="10" >
    <br><br><br>
    TASK10
    <br>
    Задайте діапазон.
    <br><br>
    Введіть початкове число:
    <br>
    <INPUT name="text1" type="text" class=text">
    <br><br>
    Введіть кінцеве число:
    <br>
    <INPUT name="text2" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Вивести таблицю відношень">
</FORM>
<?php
include "task10.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="12" >
    <br><br><br>
    TASK12
    <br>
   Програма "Відгадайте число".
    <br><br>
    Введіть:

    <br>
    <INPUT name="text" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Відгадати">
</FORM>
<?php
include "task12.php"
?>


<FORM method= "POST">
    <INPUT name="form" type="hidden" value="13" >
    <br><br><br>
    TASK13
    <br>
    "Бактерії"
    <br><br>
    Введіть початкову кількість бактерій:
    <br>
    <INPUT name="text1" type="text" class=text">
    <br><br>
    Введіть кінцеву кількість бактерій:
    <br>
    <INPUT name="text2" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Результат">
</FORM>
<?php
include "task13.php"
?>


</BODY>
</HTML>


