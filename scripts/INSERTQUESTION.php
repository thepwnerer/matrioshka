<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/questionDB.php";
	include "../DBClasses/sharedDB.php";
	$mysqli = connectDB::connect();
	session_start();
	$userName = sharedDB::generateSillyName();
	questionDB::insertQuestion($mysqli, $userName); 
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=notification');