<?php
class UserDB {
	
	static function logIn($mysqli, $username, $password){
		$res = $mysqli->query("SELECT username, password FROM `users`");
		$res->data_seek(0);
		while($row = $res->fetch_assoc()) {
			{
				if($row['username'] + $row['password'] == md5($username) + md5($password))
				{
					header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');
				}
			}
		}
		session_start();
		
		if ($username == 'user')
		{
			$_SESSION['user'] = 'user';
		}
		elseif ($username == 'admin')
		{
			$_SESSION['user'] = 'admin';
		}
		echo 'If you\'re stuck here your Password and Username are Incorrect!!';
	}

}