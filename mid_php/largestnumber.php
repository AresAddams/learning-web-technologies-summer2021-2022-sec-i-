<?php 
    $num1 = 10;
    $num2 = 15;
    $num3 = 20;
    
    if($num1>$num2 && $num1>$num3){
        echo $num1;
    }
    else{
        if($num2<$num1 && $num2<$num3){
        echo $num2;
    }
    else
        echo $num3;
    }
?>