<?php

$mysqli = new mysqli("localhost", "root", "", "mysql2");
$mysqli->set_charset('utf8mb4');
if ($mysqli->connect_error) {
    die("Ошибка: " . $mysqli->connect_error);
}
if (!isset($_GET['id'])) {
    $sql = "SELECT * FROM articles";
    if ($result = $mysqli->query($sql)) {
        $rowsCount = $result->num_rows;
        echo '<table border = "5"  style = "border-collapse: collapse
    border: 1px solid green">';
        foreach ($result as $row) {
            echo '<tr>';


            echo '<td><a href="/?id=' . $row["id"] . '">' . $row["title"] . '</a></td>';
            echo '<td>' . $row["text"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
    } else {
        echo "Ошибка: " . $mysqli->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM articles WHERE id=" . $id . ";";
    if ($result = $mysqli->query($sql)) {
        $rowsCount = $result->num_rows;
        echo '<table border = "5">';
        foreach ($result as $row) {
            echo '<tr>';

            echo '<td><a href="/">' . $row["title"] . '</a></td>';
            echo '<td>' . $row["text"] . '</td>';
            echo '</tr>';

            $sql = "SELECT * FROM comments INNER JOIN users ON users.id = comments.user_id WHERE article_id=" . $id . ";";
            if ($result2 = $mysqli->query($sql)) {
                $rowsCount = $result2->num_rows;
                echo '<table align = "right" >';
                foreach ($result2 as $row) {
                    echo '<tr>';


                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>';
                    echo " -  ";
                    echo '<td>' . $row["note"] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                $result2->free();
            } else {
                echo "Ошибка: " . $mysqli->error;
            }
        }
        echo '</table>';
        $result->free();
    } else {
        echo "Ошибка: " . $mysqli->error;
    }
}

$mysqli->close();
