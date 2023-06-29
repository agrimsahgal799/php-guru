<?php

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"red","b"=>"green","c"=>"blue");

$result = array_diff_assoc($a1,$a2);
/*
    Array
    (
        [d] => yellow
    )
*/

/* get only repeated value using array unique */
$arr = array(7,5,5,2,2,1);
$result1 = array_unique(array_diff_assoc($arr, array_unique($arr)));
$result1 = array_values($result1);
/*
    Array
    (
        [2] => 5
        [4] => 2
    )
*/