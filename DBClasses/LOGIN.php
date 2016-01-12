<?php
	include "../DBClasses/connectDB.php";
	include "../DBClasses/userDB.php";
	$mysqli = connectDB::connect();
	$verify = userDB::logIn($mysqli, $_POST['username'], $_POST['password']);
	
	if($verify == 'yesUser')
	{
		session_start();
		$_SESSION['verified'] = 'yes';
		$_SESSION['user'] = 'user';
		header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');
	}
	elseif($verify == 'yesAdmin')
	{
		session_start();
		$_SESSION['verified'] = 'yes';
		$_SESSION['user'] = 'admin';
		header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');
	}
	elseif($verify == 'no')
	{
		header('Location: http://localhost/testPHPProject/pages/login.php?hack=no');
	}