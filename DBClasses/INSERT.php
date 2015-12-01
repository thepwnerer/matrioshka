<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/questionDB.php";
	$mysqli = connectDB::connect();
	questionDB::insertQuestion($mysqli); 
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=notification');
?>