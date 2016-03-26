<?php
	class One {
		public $var = 50;
		public function hello() {
			return "Hello";
		}

		public function world() {
			return "World";
		}
	} 

	class Two extends One {
		public function helloworld() {
			return $this->hello() . " " . $this->world();
		}
	}

	class Three extends Two {

	}

	$three = new Three();
	echo $three->helloworld();
	echo "<br>";
	echo $three->var;

 ?>