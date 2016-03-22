<?php 
	function test($var) {
		return $var();
	}

	// Version 1
	$var = function() {
		return "Hello World";
	};
	echo test($var);

	// Version 2
	echo test(function() {
		return "Hello World";
	});
 ?>