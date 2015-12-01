<?php
class connectDB{
	public $mysqli;
	//establish a connection to the database 
	public static function connect() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "friends";
		//create connection
		$mysqli = new mysqli($servername, $username, $password, $database);

		//check connection
		if ($mysqli->connect_error) {
			die ("Connection failed: " . $mysqli->connection_error);
		}
		return $mysqli;
	}
}
