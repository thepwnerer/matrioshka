<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/answerDB.php";
	$mysqli = connectDB::connect();
	answerDB::insertAnswer($mysqli, $_GET['qid']);
	header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');
	?>