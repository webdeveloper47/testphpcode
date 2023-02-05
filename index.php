<?php 




$condition1 = true;
$condition2 = true;
$condition3 = true;


if($condition1 && $condition2 && $condition3){
    echo "Bangladesh is the beautiful country";
}elseif($condition1 && $condition2){
    echo "Condition Three is False";
}elseif($condition1){
    echo "Condition two is False";
}else{
    echo "Condition one is False";
}


echo PHP_EOL;

// Ternary Operator avobe of the code 

$checkCondition = (($condition1 && $condition2 && $condition3)? "Bangladesh is the beautiful country": ($condition1 && $condition2))?"Condition Three is False": (($condition1)? "Condition two is False" : "Condition one is False");

echo $checkCondition;