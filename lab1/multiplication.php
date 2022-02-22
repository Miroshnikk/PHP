<?php

echo'<table border="2">';
echo "<table style = 'text-align: center'>";

for($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=1;$j<=10;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
  
?>