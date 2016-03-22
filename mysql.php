<?php

$mysql = new mysqli("localhost","root","1234","user");

if($mysql->connect_error) {
	die($mysql->connect_error);
}

$sql = "SELECT * From user";

//Object
$result = $mysql->query($sql);


//1st Way
//Array
/*$var = $result->fetch_all(MYSQLI_ASSOC);

foreach ($var as $v) {
	echo "id : " . $v['id'];
	echo "<br>";
	echo "name : " . $v['name'];
	echo "<br>";
	echo "age : " . $v['age'];
	echo "<br>";
	echo "gender : " . $v['gender'];
	echo "<hr>";
}*/

//2nd Way
/*for ($x=1; $x <= $result->num_rows; $x++) {
	$v = $result->fetch_assoc();

	echo $v['id'];
	echo "<br>";
	echo $v['name'];
	echo "<br>";
	echo $v['age'];
	echo "<br>";
	echo $v['gender'];
	echo "<hr>";

}*/

//2nd Way as Object
for ($x=1; $x <= $result->num_rows; $x++) {
	$v = $result->fetch_object();
	echo $v->id;
	echo "<br>";
	echo $v->name;
	echo "<br>";
	echo $v->age;
	echo "<br>";
	echo $v->gender;
	echo "<hr>";
}

//3rd Way
/*while ($v = $result->fetch_assoc()) {
	echo $v['id'];
	echo "<br>";
	echo $v['name'];
	echo "<br>";
	echo $v['age'];
	echo "<br>";
	echo $v['gender'];
	echo "<hr>";
}*/

//3rd Way as Object
/*while ($v = $result->fetch_object()) {
	echo $v->id;
	echo "<br>";
	echo $v->name;
	echo "<br>";
	echo $v->age;
	echo "<br>";
	echo $v->gender;
	echo "<hr>";
}*/