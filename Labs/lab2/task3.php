<?php

if (!empty($_POST) && $_POST["form"] == 3 && $_POST["text"] != null) {

    $log = $_POST["text"];

    $log1 = "rumskiy1";
    $log2 = "sergienko1";
    $log3="romanchenko1";
    $log4="zakharchuk1";

if($log == $log1)
{
    echo "<script>alert(\"Доброго дня, Римський Петре  Івановичу!\");</script>";
}
elseif ($log == $log2)
{
    echo "<script>alert(\"Доброго дня, Сергієнко Галино Миколаївно!\");</script>";
}
elseif ($log == $log3)
{
    echo "<script>alert(\"Доброго дня, Романченко Борисе Яновичу!\");</script>";
}
elseif ($log == $log4)
{
    echo "<script>alert(\"Доброго дня, Захарчук Марино Михайлівно!\");</script>";
}
else
    echo "<script>alert(\"Вибачте, Ви у нас не зареєстровані!\");</script>";

}