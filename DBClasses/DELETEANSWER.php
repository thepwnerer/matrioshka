<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/answerDB.php";
	$mysqli = connectDB::connect();
	answerDB::deleteAnswer($mysqli, $_GET['qID'], $_GET['aID']);
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');