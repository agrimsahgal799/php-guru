<?php

/* Get the most repeated number from an array. If there are no repeated values in the array, then it will return -1. */

function getRepeatedValue($arr)
{
	$response_value = '';
	
	if(is_array($arr) && count($arr)>0)
	{
		$unique_array = array_unique(array_diff_assoc($arr,array_unique($arr)));
		$equal_array = array_unique($arr);
		if($equal_array === $arr){
		  $response_value = -1;
		}
		else{
			$unique_array = array_values($unique_array);
			
			/* get a repeated count of every array value. */
			$count_vals = array_count_values($arr);
			
			$max_val = max($count_vals);
			$response_value = array_search($max_val, $count_vals);
		}
	}
	
	return $response_value;
}

getRepeatedValue([8,2,6,2,6,2,8,8,4,8,7]);
