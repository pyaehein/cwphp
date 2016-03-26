<?php
	class One {
		public function hello() {
			return "Hello";
		}
	}

	function test() {
		return new one();
	} 

	echo test()->hello();
	
	//echo (new One())->hello();

 ?>