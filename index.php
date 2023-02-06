

<?php

// Assignment 02

$tutionFee =22000;
$comision1= $tutionFee * 25/100;
$comision2= $tutionFee * 20/100;
$comision3= $tutionFee * 15/100;

$tutionFee = (($tutionFee >20000)?($comision1):(($tutionFee>10000 && $tutionFee<20000)?($comision2):(($tutionFee>7000 && $tutionFee<10000)?($comision3):("The data will be invalid"))));


echo $tutionFee;


?>

