
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<form method= "POST" action="">
    <input name="form" type="hidden" value="1">
    TASK1
    <br><br>
    Реєстрація

    <br><br>
    Введіть логін:
    <input name="log" type="text">
    <br><br>
    Введіть пароль:
    <input name="pass" type="text">
    <br><br>
     Введіть ім'я:
    <input name="name" type="text">

    <br><br>
    Введіть дату народження:
    <input name="birth" type="text" placeholder="2000-06-06">
    <br><br>
    Вкажіть стать:
    <input name="gender" type="text">
    <br><br>
    Вкажіть країну, в якій проживаєте:
    <input name="country" type="text">
    <br><br>
    Введіть email:
    <input name="email" type="text">
    <br><br>
    Вкажіть посаду(студент/працівник):
    <input name="note" type="text">
     <br><br>
    <input type="submit" value= "Зареєструватися">
    <br>
</form>
<?php
include "registration.php";
?>
<form method= "POST" action="">
    <input name="form" type="hidden" value="2">

    <br><br>
  <input type="submit" value= "Показати всіх користувачів">
    <br>
    <?php
    include "users.php";
    ?>

</form>
</body>
</html>
