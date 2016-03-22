<?php

$mysql = new mysqli("localhost","root","1234","user");

if ($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "SELECT * FROM `user`";

$result = $mysql->query($sql);

var_dump($result->fetch_array());


?>