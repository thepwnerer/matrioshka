<?php
class UserDB {
	
	static function logIn($mysqli, $username, $password){
		$res = $mysqli->query("SELECT username, password FROM `users`");
		$res->data_seek(0);
		while($row = $res->fetch_assoc()) {
			{
				if($row['username'] == $username & $row['password'] == $password)
				{
					header('Location: http://localhost/testPHPProject/pages/layout.php?content=home');
				}
			}
		}
		echo 'If you\'re stuck here your Password and Username are Incorrect!!';
	}

}