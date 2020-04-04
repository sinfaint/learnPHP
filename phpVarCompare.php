<?php
function varCompare($var_1, $var_2){
    if($var_1 == $var_2){
        echo "$var_1 == $var_2";
        echo "<br>";
        
        if($var_1 === $var_2){
            echo "$var_1 === $var_2";
            echo "<br>";
        }
        else{
            echo "the two var have same value, but have different type.";
            echo "<br>";
            echo "the first var has type";
            var_dump($var_1);
            echo "the second var has type";
            var_dump($var_2);
        }
    }
    else{
        echo "$var_1 != $var_2";
        echo "<br>";
    }
}

varCompare(42,0X2A);
?>