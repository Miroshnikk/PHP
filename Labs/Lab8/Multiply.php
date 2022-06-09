<?php
class Multiply
{
    public $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    public function multiplication()
    {

        echo '<table border= "5">';
        echo '<tr>';
        echo '<td>';
        for ($i = 1; $i <= 10; $i++) {
            echo "$this->x * $i = " . $this->x * $i;
            echo '<br>';

        }

        echo '</td>';
        echo '</tr>';
        echo '</table>';
    }
}
if (isset($_GET["x"])) {
    $x = (float) $_GET["x"];
    $m = new Multiply($x);
    $m->multiplication();
}



?>













