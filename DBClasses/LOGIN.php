<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/userDB.php";
	$mysqli = connectDB::connect();
	userDB::logIn($mysqli, $_GET['username'], $_GET['password']);