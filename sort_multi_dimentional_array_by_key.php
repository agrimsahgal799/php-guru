<?php

$data = array(
	array(
		'name' => 'sam',
		'age' => 26
	),
	array(
		'name' => 'ravi',
		'age' => 30
	),
	array(
		'name' => 'rahul',
		'age' => 20
	),
	array(
		'name' => 'mohit',
		'age' => 35
	)
);

$keys = array_column($data, 'age');
array_multisort($keys, SORT_ASC, $data);

/*
Array
(
    [0] => Array
        (
            [name] => rahul
            [age] => 20
        )

    [1] => Array
        (
            [name] => sam
            [age] => 26
        )

    [2] => Array
        (
            [name] => ravi
            [age] => 30
        )

    [3] => Array
        (
            [name] => mohit
            [age] => 35
        )

)
*/
