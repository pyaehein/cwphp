<html>
	<head>
	<title>
		Read
	</title>
	</head>
</html>

<?php

$mysql = new mysqli("localhost","root","1234","user");

if($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "SELECT * From user";

$query = $mysql->query($sql);

if ($query) {
	if ($query->num_rows > 0) {
		for ($x=1; $x <= $query->num_rows; $x++) {
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
		echo "There's no data in Database.";
	}
	
} else {
	die($mysql->error);
}

$mysql->close();