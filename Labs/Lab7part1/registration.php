<?php
if (isset($_POST['log']) && isset($_POST['pass'])
    && isset($_POST['name']) && isset($_POST['birth'])
    && isset($_POST['gender']) && isset($_POST['country'])
    && isset($_POST['email']) && isset($_POST['note']) && ( $_POST["form"]==1)) {

    $log = $_POST['log'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $note = $_POST['note'];


    $mysqli_host = "localhost";
    $mysqli_user = "root";
    $mysqli_password = "";
    $mysqli_base = 'mysql1';
    $mysqli_table = "users";


    $mysqli = new mysqli("localhost", "root", "", "mysql1");
    $mysqli->set_charset('utf8mb4');
    if ($mysqli->connect_error) {
        die("Ошибка: " . $mysqli->connect_error);
    }
        $query = $mysqli->prepare("INSERT INTO users (login, password, name, birthday, gender, country, email, note) VALUES (?, ?, ?, ?, ?, ?, ?, ?); ");

    $query->bind_param('ssssssss', $log,
        $pass,
        $name,
        $birth ,
        $gender,
        $country,
        $email,
        $note);
    if ($query->execute()) {
        echo "Ви успішно зареєстровані!";
    }else{
        echo "Помилка";
    }


       }


