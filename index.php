<?php

require_once 'animal.php';

$sheep = new Animal("shaun", 4, "no");

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

$frog = new Animal("buduk", 4, "no");
$frog->jump = "Hop Hop";

echo "Name : " . $frog->name . "<br>";
echo "legs : " . $frog->legs . "<br>";
echo "cold blooded : " . $frog->cold_blooded . "<br>";
echo "jump : " . $frog->jump . "<br><br>";

$monkey = new Animal("kera sakti", 2, "no");
$monkey->yell = "Auooo";

echo "Name : " . $monkey->name . "<br>";
echo "legs : " . $monkey->legs . "<br>";
echo "cold blooded : " . $monkey->cold_blooded . "<br>";
echo "Yell : " . $monkey->yell . "<br>";


?>