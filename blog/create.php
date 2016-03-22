<?php

$mysql = new mysqli("localhost","root","1234","user");

if($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "INSERT INTO user (name, age, gender) VALUES ('bad','22','male')";

$query = $mysql->query($sql);

if ($query) {
	echo "Your new user is created";
} else {
	die($mysql->error);
}

$mysql->close();