<html>
	<head>
	<title>
		Edit
	</title>
	</head>
</html>
<?php

$mysql = new mysqli("localhost","root","1234","user");

if($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "UPDATE user SET `name` = 'ohh' , `age` = 25, `gender` = 'male' WHERE `id` = 5";

$query = $mysql->query($sql);

if ($query) {
	echo "Your user is updated";
} else {
	die($mysql->error);
}

$mysql->close();