<?php

$mysql = new mysqli("localhost","root","1234","user");

if($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "DELETE FROM `user` WHERE `id` = 4";

$query = $mysql->query($sql);

if ($query) {
	echo "User is deleted";
} else {
	die($mysql->error);
}

$mysql->close();