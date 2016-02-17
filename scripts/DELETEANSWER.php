<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/answerDB.php";
	include "../conf.php";
	$mysqli = connectDB::connect();
	answerDB::deleteAnswer($mysqli, $_GET['qID'], $_GET['aID']);
	header($rootpath . 'pages/layout.php?content=questions');