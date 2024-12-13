<?php

require_once 'Frog.php';
require_once 'Ape.php';

// Instance of Animal
$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold blooded : " . $sheep->cold_blooded . "<br><br>";

// Instance of Frog
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : ";
$kodok->jump();
echo "<br>";

// Instance of Ape
$sungkong = new Ape("kera sakti");
echo "Name : " . $sungkong->name . "<br>";
echo "Legs : " . $sungkong->legs . "<br>";
echo "Cold blooded : " . $sungkong->cold_blooded . "<br>";
echo "Yell : ";
$sungkong->yell();

?>
