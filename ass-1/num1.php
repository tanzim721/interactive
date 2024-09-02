<?php 

    $n = array(2, 4, -4, 30, 1);

    for ($i=0; $i < count($n); $i++) { 
        if($n[$i] < 0){
            $n[$i] = -1*$n[$i]; 
        }
    }
    $min = $n[0];
    for ($i=1; $i < count($n); $i++) { 
        if($min > $n[$i]){
            $min = $n[$i];
        }
    }
    echo $min;


