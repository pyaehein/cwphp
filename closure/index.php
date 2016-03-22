<?php 

	function test($array, $func) {
		foreach ($array as $v) {
			$func($v);
		}
	}

	$var = [1,2,3,4,5];

	test($var, function($v){
		echo ($v * 50) . "<br>";
	});

 ?>