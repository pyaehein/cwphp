<?php 

function connect(){

	$mysql = new mysqli("localhost","root","1234","user");

	if($mysql->connect_error) {
		die($mysql->connect_error);
	}

	return $mysql;
}

function select(){

	$mysql = connect();

	$sql = "SELECT * From user";

	$query = $mysql->query($sql);

	if ($query) {
		if ($query->num_rows > 0) {
			for ($x=1; $x <= $query->num_rows; $x++) {
				$result = $query->fetch_object();
				echo $result->id;
				echo "<br>";
				echo "<a target='_blank' href='single.php?id=" . $result->id ."'>" . $result->name . "</a>";
				//echo $result->name;
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
}

function select_single($id){

	$mysql = connect();

	$sql = "SELECT * From user where id= " . $id;

	$query = $mysql->query($sql);

	if ($query) {
		if ($query->num_rows > 0) {
			$result = $query->fetch_object();
			echo $result->id;
			echo "<br>";
			echo $result->name;
			echo "<br>";
			echo $result->age;
			echo "<br>";
			echo $result->gender;
		} else {
			echo "There's no data in Database.";
		}
		
	} else {
		die($mysql->error);
	}

	$mysql->close();
}

function update(){

	$mysql = connect();

	$sql = "UPDATE user SET `name` = 'ohh' , `age` = 25, `gender` = 'male' WHERE `id` = 5";

	$query = $mysql->query($sql);

	if ($query) {
		echo "Your user is updated";
	} else {
		die($mysql->error);
	}

	$mysql->close();
}

function delete(){

	$mysql = connect();

	$sql = "DELETE FROM `user` WHERE `id` = 4";

	$query = $mysql->query($sql);

	if ($query) {
		echo "User is deleted";
	} else {
		die($mysql->error);
	}

	$mysql->close();
}

function create(){

	$mysql = connect();

	$sql = "INSERT INTO user (name, age, gender) VALUES ('bad','22','male')";

	$query = $mysql->query($sql);

	if ($query) {
		echo "Your new user is created";
	} else {
		die($mysql->error);
	}

	$mysql->close();
}
?>
