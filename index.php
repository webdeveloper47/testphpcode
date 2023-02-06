

<?php


$tutionFee =22000;

$tutionFee = (($tutionFee >20000)?("Comision 25% "):(($tutionFee>10000 && $tutionFee<20000)?("Comision 20%"):(($tutionFee>7000 && $tutionFee<10000)?("Comision 15%"):("The data will be invalid"))));


echo $tutionFee;


?>

