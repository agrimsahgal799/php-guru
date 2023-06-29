<?php

$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
$a2 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$result = array_diff_assoc($a1,$a2);
echo '<pre>';
print_r($result);

$arr = array(7,5,5,2,2,1);

$result1 = array_unique(array_diff_assoc($arr, array_unique($arr)));
echo '<pre>';
print_r($result1);