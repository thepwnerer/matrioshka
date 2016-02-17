<?php
class UserDB {
	
	static function logIn($mysqli, $username, $password){
		$hashedUser = md5($username);
		$hashedPassword = md5($password);
		$res = $mysqli->query("SELECT * FROM `users` WHERE username = '" . $hashedUser . "' and password = '" . $hashedPassword . "'");
		
		$loginInfo = $res->fetch_row();

		if($countVerification == 1 & $loginInfo['0'] == md5('user'))
		{
			return 'yesUser';
		}
		elseif($countVerification == 1 & $loginInfo['0'] == md5('admin'))
		{
			return 'yesAdmin';
		}
		else
		{
			return 'no';
		}
	}

}
