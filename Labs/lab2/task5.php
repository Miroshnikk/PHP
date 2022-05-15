 <?php
 if (!empty($_POST) && $_POST["form"] == 5 && $_POST["text"] != null) {

     $a = $_POST["text"];
     echo "<br>";

     if (($a % 2) == 0) {
         echo "Число парне.";
     } else {
         echo "Число непарне.";
     }
 }