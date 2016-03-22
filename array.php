<?php

class User {
	public $name;

	public function __construct($first,$last) {
		$this->name = ucwords(strtolower($first ." ". $last));
	}
}

$ppl = new User("mg","kYaw");
echo $ppl->name;

?>