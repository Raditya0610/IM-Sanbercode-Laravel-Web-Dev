<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br> <br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell() . "<br> <br>";// "Auooo"

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " .  $kodok->jump() ; // "hop hop"
?>