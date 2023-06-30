<?php

/*
	If there is a string whitch contain only alphabetic characters and spaces, and return the first non-repeating character.
	For example: if str is "agettkgaeee" then your program should return k.
	The string will always contain at least one character and there will always be at least one non-repeating character.
	
	input  : "abcdef"
	output : a
	
	input  : "agettkgaeee";
	output : k
	
*/

function not_repeated_character($char){
	
	for($i = 0; $i <= strlen($char); $i++ ){
			
		/* substr returns a part of string by position(start) and last param is length */
		$char_in_string = substr($char, $i, 1);
		
		if($char_in_string){
			
			/* The number of times char occurs in the string */
			if(substr_count($char, $char_in_string) == 1 ){
				return $char_in_string;
			}				
		}
	}
	return null;
}

$non_repeated = not_repeated_character('agettdgaeee');
/* output : d */