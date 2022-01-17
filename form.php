<?php

$x = $_POST["number1"];

$y = $_POST["number2"];

$random = rand($x, $y);
echo "Votre nombre est : " . $random;