<?php
require "animal.php";
require "ape.php";
require "frog.php";

$sheep = new Animal("shaun");
echo "Name: " . $sheep->getName(); // "shaun"
echo "<br>";
echo "Kambing Memiliki " . $sheep->getLegs() . " kaki"; // 2
echo $sheep->GetCold_blooded(); // false
echo "<br>";
var_dump($sheep);
echo "<br>";
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()

//APE
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->getName();
echo "<br>";
echo "Bunyi sungokong yaitu " . $sungokong->yell(); // "Auooo"
echo "<br>";
var_dump($sungokong);
echo "<br>";
echo "<br>";

//FROG
$kodok = new Frog("buduk");
echo "Name: " . $kodok->getName();
echo "<br>";
echo "Kodok Memiliki " . $kodok->getLeg() . " kaki";
echo "<br>";
echo "Kodok melompat berbunyi " . $kodok->jump(); // "hop hop"
echo "<br>";
var_dump($kodok);
?>