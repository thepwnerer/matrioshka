<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/userDB.php";
	include "../conf.php";
	$mysqli = connectDB::connect();
	$verify = userDB::logIn($mysqli, $_POST['username'], $_POST['password']);
	
	if($verify == 'yesUser')
	{
		session_start();
		$_SESSION['verified'] = 'yes';
		$_SESSION['user'] = 'user';
		header($rootpath . 'pages/layout.php?content=home');
	}
	elseif($verify == 'yesAdmin')
	{
		session_start();
		$_SESSION['verified'] = 'yes';
		$_SESSION['user'] = 'admin';
		header($rootpath . 'pages/layout.php?content=home');
	}
	elseif($verify == 'no')
	{
		header($rootpath . 'pages/login.php?hack=no');
	}