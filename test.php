<?php

include 'functions.php';

# phpinfo();
// rewetka towe komentarij
/* komentarij
na neskolko
strok */


echo "Hello world!<br>";

// text (string, symbol)
$name = "Nastja";

// integer
$number = 15; 

// float
$number1 = 10.125; 

// NULL
$var = NULL;

// array
$myarray = array ('Esmasp','Teisip','Kolmap','Neljap','Reede');

$number2 = $number;
$number3 = &$number;

$number = 10;

$sum = $number + $number1;
$sum2 = $number2 + $number1;
$sum3 = $number3 + $number1;
//$sum4 = $name + $number;

echo "First sum is: ".$sum." and second sum is: ".$sum2." and third sum is: ".$sum3."<br>";

//echo "Text + number $sum4 <br>";

echo $sum."<br>";
    
echo "My name is $name";

?>