<?php
echo "<br><br>";
echo "Task4";
echo "<br><br>";

$Square = array();
$Cube = array();
$Array = array();

$count = 0;

echo "Square: [";
for ($i = 10; $i<=20; $i++)
{
    $Square[$count] = pow($i,2);

    echo $Square[$count], " ";

    $count++;
}

echo "]<br>";
echo "Cube: [";

for ($i = 1; $i<=10; $i++)
{
    $Cube[$count] = pow($i,3);

    echo $Cube[$count], " ";

    $count++;
}

echo "]<br>";

$Array = $Square+$Cube;

echo "Square+Cube: [";
for ($i = 0; $i<=20; $i++)
{
    echo $Array[$i], " ";
}
echo "]<br>";