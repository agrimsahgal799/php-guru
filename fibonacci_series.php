<?php
/*
    The Fibonacci series is a series of elements where the previous two elements are added to get the next element.
    There are two way to get the fibonacci series
    1. Recursive function
    2. Iterative function
*/

/* Get Fibonacci series by Recursive function */

function Fibonacci_r($number){

    if($number == 0){
        return 0;
    }
    elseif($number == 1){
        return 1;
    }
    else{
        return Fibonacci_r($number - 1) + Fibonacci_r($number - 2);
    }
}

$number = 10;
$fibonacci_by_recursion = '';
for($i = 0; $i < $number; $i++){
    $fibonacci_by_recursion.= Fibonacci_r($i).' ';
}
echo 'Fibonacci Series by recursion: '.$fibonacci_by_recursion;
echo '<br>';

/* Get Fibonacci series by Iterative function */

function Fibonacci_i($num){
    $num1 = 0;
    $num2 = 1;
    
    $counter = 0;
    while ($counter < $num) {
        echo $num1.' ';
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter++;
    }
}

$num = 15;
echo 'Fibonacci Series by iteration: ';
Fibonacci_i($num);
echo '<br>';
echo '<br>';

/*
Print :
1
12
123
1234
12345
*/
for($i = 1; $i <= 5; $i++){
    echo '1';
    for($j = 2; $j <= $i; $j++){
        echo $j;
    }
    echo '<br>';
}
echo '<br>';

/*
Print :
11
222
3333
44444
555555
*/
for($i = 1; $i <= 5; $i++){
    echo $i;
    for($j = 1; $j <= $i; $j++){
        echo $i;
    }
    echo '<br>';
}
echo '<br>';

/*
Print :
1
22
333
4444
55555
*/
for($i = 1; $i <= 5; $i++){
    echo $i;
    for($j = 1; $j < $i; $j++){
        echo $i;
    }
    echo '<br>';
}