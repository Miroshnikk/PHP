
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multiplication</title>
</head>
<body>
<FORM method= "GET">
    <INPUT name="form" type="hidden" value="1">
    Task1<br><br>
    Enter a number:


    <INPUT name="x" type="text" class=text">
    <br><br>
    <INPUT type="submit" value= "Show table">
    <br><br>
</FORM>
<?php
include "Multiply.php"
?>

<FORM method="POST">
    <INPUT name="form" type="hidden" value="3">
   <br><br> Task3<br><br>
    Enter information about yourself:
    <br><br>
    Enter your surname:
    <INPUT name="name" type="text" class=text">
    <br><br>
    Enter your name:
    <INPUT name="surname" type="text" class=text">
     <br><br>
    Enter your age:
     <INPUT name="age" type="text" class=text">
    <br><br>
    Enter your email:
    <INPUT name="email" placeholder="user1@gmail.com" type="text" class=text">
    <br><br>
    <INPUT type="submit" value="Ready">
    <br><br>
</FORM>
<?php
include 'User.php' ?>

<FORM method="POST">
    <INPUT name="form" type="hidden" value="5">
    <br><br>Task5

    <br><br>
    Enter the first number:
    <INPUT name="firstNum" type="text" class=text">
    <br><br>
    Enter the second number:
    <INPUT name="secondNum"type="text" class=text">
    <br><br>
    <INPUT type="submit" value="Quantify">
    <br><br>
</FORM>
<?php
include 'Calcullator.php' ?>

<FORM method="POST">
    <INPUT name="form" type="hidden" value="7">
    <br><br>Task7

    <br><br>
    Enter the first number:
    <INPUT name="firstNum" type="text" class=text">
    <br><br>
    Enter the second number:
    <INPUT name="secondNum"type="text" class=text">
    <br><br>
    <INPUT type="submit" value="Quantify">
    <br><br>
</FORM>
<?php
include 'Dispatch.php' ?>
</body>
</html>