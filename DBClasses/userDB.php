<?php
class UserDB {
	
	static function logIn($mysqli, $username, $password){
		$hashedUser = md5($username);
		$hashedPassword = md5($password);
		$res = $mysqli->query("SELECT * FROM `users` WHERE username = '" . $hashedUser . "' and password = '" . $hashedPassword . "'");
		//$res = $mysqli->query("select * from `users`");
		echo '<pre>';
		echo  var_dump($res);
		echo'</pre>';
		$countVerification = $res->num_rows;
		echo $countVerification;
		// echo '<pre>';
		// echo var_dump($res->fetch_row());
		// echo'</pre>';

		$loginInfo = $res->fetch_row();
		echo '<pre>';
		echo $loginInfo['0'];
		echo'</pre>';

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
