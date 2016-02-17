<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/questionDB.php";
	include "../conf.php";
	$mysqli = connectDB::connect();
	questionDB::deleteQuestion($mysqli, $_GET['id']);
	header($rootpath . 'pages/layout.php?content=questions');