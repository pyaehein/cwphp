<?php 

$mysql = new mysqli('localhost','root','1234','user');

if ($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "SELECT * from user";

$query = $mysql->query($sql);

if ($query) {
	if ($query->num_rows > 0) {
		for ($i=0; $i < $query->num_rows; $i++) { 
			$result = $query->fetch_object();
			echo $result->id;
			echo "<br>";
			echo $result->name;
			echo "<br>";
			echo $result->age;
			echo "<br>";
			echo $result->gender;
			echo "<hr>";
		}
	} else {
		echo "There is no data";
	}
} else {
	die($mysql->error);
}

$mysql->close();
 ?>
