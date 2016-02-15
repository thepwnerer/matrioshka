<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/answerDB.php";
	include "../DBClasses/sharedDB.php";
	$mysqli = connectDB::connect();
	session_start();
	$userName = sharedDB::generateSillyName();
	$answerID = answerDB::insertAnswer($mysqli, $_GET['qid'], $userName);
	answerDB::insertQuestionAnswer($mysqli, $answerID);
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=questions');
