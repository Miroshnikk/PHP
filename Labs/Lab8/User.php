<?php

class User
{
    public $surname;
    public $name;
    public $age;
    public $email;

    function __construct($surname, $name, $age, $email)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    function information()
    {
        echo 'Information about you: <br><br>';
        echo '<table border ="5"><tr><td> Surname</td><td>' . $this->surname . '</td></tr>';
        echo '<tr><td> Name</td><td>' . $this->name . '</td></tr>';
        echo '<tr><td> Age</td><td>' . $this->age . '</td></tr>';
        echo '<tr><td> Email</td><td>' . $this->email . '</td></tr></table>';
    }
}


    if ($_POST["form"]==3 && $_POST["surname"]!=null && $_POST["name"]!=null && $_POST["age"]!=null && $_POST["email"]!=null)
        {
            $user = new User($_POST["surname"], $_POST["name"], $_POST["age"], $_POST["email"]);
            $user->information();
        }
    else{
            echo 'Fill in all the fields!';

        }
