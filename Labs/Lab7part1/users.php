<?php
if( $_POST["form"]==2) {
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
    $sql = "SELECT * FROM users";
    if ($result = $mysqli->query($sql)) {
        $rowsCount = $result->num_rows;
        echo '<table border = "5"  style = "border-collapse: collapse
    border: 1px solid green">';
        foreach ($result as $row) {
            echo '<tr>';


            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            echo '<td>' . $row["name"] . '</td>';
            echo '<td>' . $row["birthday"] . '</td>';
            echo '<td>' . $row["gender"] . '</td>';
            echo '<td>' . $row["country"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["note"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
    } else {
        echo "Ошибка: " . $mysqli->error;

    }
}