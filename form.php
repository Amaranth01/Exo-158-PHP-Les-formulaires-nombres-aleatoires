<?php

$x = $_POST["number1"];
$y = $_POST["number2"];

if (!is_numeric($x) || !is_numeric($y) || $y < $x || $y > getrandmax()){
    header("Location: index.php?error=1");
}

$random = rand($x, $y);
echo "Votre nombre est : " . $random;