<?php
	class Test {
		public function hello() {
			return "Hello World";
		}
	}

	function call_test(){
		return new Test();
	}

	$test = call_test();
	echo $test->hello();
	echo "<br>";
	echo call_test()->hello();

	?>