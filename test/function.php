<?php

$first = $_POST['first'];
$second = $_POST['second'];

check($first, $second);

function check($first, $second){
	if($first >= 1 && $first <= 10 && $second >= 1 && $second <= 10 && $first <= $second ){
		star($first, $second);
	}else {
		if($first < 1){
			echo "First number can't be lower than 1.";
		}
		if($first > 10){
			echo "First number can't be greater than 10.";
		}
		if($second < 1){
			echo "Second number can't be lower than 1.";
		}
		if($second > 10){
			echo "Second number can't be greater than 10.";
		}	
		if($first > $second){
			echo "First number can't be greater than second number.";
		}	
	}
}
 
function star($first, $second){
	for ($x = $first; $x <= $second ; $x++) { 
		for ($y = 1; $y <= $x ; $y++) { 
			echo "*";
		}
		echo "<br>";
	}
}

?>