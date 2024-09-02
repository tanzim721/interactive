<?php

    $str = "I love programming";
    $word = explode(' ', $str);
    $rev_word = array();
    foreach($word as $item)
    {
        $rev_word = strrev($item);
        $rev_words[] = $rev_word;   
    }
    $res = implode(' ', $rev_words);
    echo $res;

    


