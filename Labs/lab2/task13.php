<?php
if (!empty($_POST) && $_POST["form"] == 13 && $_POST["text1"] != null && $_POST["text2"] != null) {

    $first = $_POST["text1"];
    $second = $_POST["text2"];

    $t=0;
    $i=0;

   while ($first<$second)
   {
       $first = $first*2;
       $t++;
       $i++;
       echo "$i. Минула $t год. - маємо $first бактерій.";
       echo"<br>";
   }
       while($first>$second) {
           break;

       }
}