<?php
echo "<br><br><br>";
echo"Task2";
echo "<br><br>";
$Netherlands = array("Country"=>"Netherlands","Capital"=>"Amsterdam", "Population"=>"18 million");
$Italy = array("Country"=>"Italy","Capital"=>"Rome", "Population"=>"60 million");
$Colombia = array("Country"=>"Colombia","Capital"=>"Bogota", "Population"=>"51 million");
echo"Table1";
echo'<table border="1">
    <tr><td align="center">';
     echo $Netherlands["Country"];
     echo '</td><td align="center">';
echo "capital - ",$Netherlands["Capital"];
echo",  population -",$Netherlands["Population"];
echo'</td></tr>';
echo'<tr><td align="center">';
echo $Italy["Country"];
echo '</td><td align="center">';
echo "capital - ",$Italy["Capital"];
echo",  population -",$Italy["Population"];
echo'</td></tr>';
echo'<tr><td align="center">';
echo $Colombia["Country"];
echo '</td><td align="center">';
echo "capital - ",$Colombia["Capital"];
echo",  population -",$Colombia["Population"];
echo'</td></tr></table>';

echo "<br>";
echo"Table2";
echo'<table border="1">
    <tr><td align="center">';
echo $Netherlands["Country"];
echo'</td><td align="center">';
 echo $Italy["Country"];
     echo '</td><td align="center">';
      echo $Colombia["Country"];
     echo '</td></tr>';
     echo'<tr><td align="center">';
echo "capital - ",$Netherlands["Capital"];
echo",  population -",$Netherlands["Population"];
echo'</td><td align="center">';
echo "capital - ",$Italy["Capital"];
echo",  population -",$Italy["Population"];
     echo '</td><td align="center">';
echo "capital - ",$Colombia["Capital"];
echo",  population -",$Colombia["Population"];
     echo '</td></tr></table>';

