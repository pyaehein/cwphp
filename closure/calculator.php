<?php 
	function calculator($x, $y, $func) {
		return $func($x, $y);
	}

	echo calculator(10, 50, function($x,$y){
		return $x * $y;
	});
 ?>