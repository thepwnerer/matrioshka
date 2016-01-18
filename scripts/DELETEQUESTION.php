<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/questionDB.php";
	$mysqli = connectDB::connect();
	questionDB::deleteQuestion($mysqli, $_GET['id']);
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=questions');