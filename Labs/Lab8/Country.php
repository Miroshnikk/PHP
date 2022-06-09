<?php
class Country{
    private $country;
    private $capital;
    private $population;

    public function __construct($country, $capital, $population)
    {
        $this->country = $country;
        $this->capital = $capital;
        $this->population = $population;
    }
public function information(){
         echo'<table border="5">';
         echo'<tr><td> Country </td><td>'.$this->country.'</td></tr>';
         echo'<tr><td>Capital</td><td>'.$this->capital.'</td></tr>';
         echo'<tr><td>Population</td><td>'.$this->population.'</td></tr></table>';
    }

}
$first = new Country('Netherlands', 'Amsterdam', '18 million');
$second = new Country('Italy', 'Rome', '60 million');
$third = new Country('Colombia','Bogota', '51 million');

$first->information();
$second->information();
$third->information();


