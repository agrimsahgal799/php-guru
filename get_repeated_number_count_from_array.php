<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get repeated number count from array</title>
    </head>
    <body>
		<?php
			
			$arr = [1,2,4,5,22,1,4,6,9,3,9,6,3,4,23,6,5];

			// Create an empty array;
			// assign dynamically key => value in this array
			$numbers = [];
			foreach ($arr as $value) {
				if(empty($numbers)){
					$numbers[$value] = 1;
				}
				elseif(isset($numbers[$value])){
					$numbers[$value] += 1;
				}
				if(!isset($numbers[$value])){
					$numbers[$value] = 1;
				}
			}
			//echo '<pre>'; 
			//print_r($numbers);

			/* shortcut way */
			$count_values = array_count_values($arr);
			//print_r($count_values);
			$max = max($count_values);
			$max_value = array_search($max, $count_values);
		?>
    </body>
</html>