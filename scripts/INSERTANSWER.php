<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/answerDB.php";
	$mysqli = connectDB::connect();
	$answerID = answerDB::insertAnswer($mysqli, $_GET['qid']);
	answerDB::insertQuestionAnswer($mysqli, $answerID);
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=questions');
