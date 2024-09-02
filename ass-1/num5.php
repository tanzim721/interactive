<?php 

    $n = 123456;
    $ans = 0;
    while($n)
    {
        $ans += $n%10;
        $n = (int)$n/10;
    }
    echo $ans;
