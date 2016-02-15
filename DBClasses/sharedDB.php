<?php
class sharedDB {

	public static function generateSillyName()
	{
		$randy = rand(0, 4);

		if ($_SESSION['user'] == 'user' & $randy == 0)
		{
			$userName = 'Juvenile :}';
		}
		else if ($_SESSION['user'] == 'user' & $randy == 1)
		{
			$userName = 'Youngling =D';
		}
		else if ($_SESSION['user'] == 'user' & $randy == 2)
		{
			$userName = 'Junior!';
		}
		else if ($_SESSION['user'] == 'user' & $randy == 3)
		{
			$userName = 'Max\'s best friend';
		}
		else if ($_SESSION['user'] == 'user' & $randy == 4)
		{
			$userName = 'Smiley Pierus!';
		}
		else if ($_SESSION['user'] == 'admin' & $randy == 0)
		{
			$userName = 'Elder =O';
		}
		else if ($_SESSION['user'] == 'admin' & $randy == 1)
		{
			$userName = 'Ancient One';
		}
		else if ($_SESSION['user'] == 'admin' & $randy == 2)
		{
			$userName = 'One Who has Seen the Beginning of Time';
		}
		else if ($_SESSION['user'] == 'admin' & $randy == 3)
		{
			$userName = 'Old Fogey';
		}
		else if ($_SESSION['user'] == 'admin' & $randy == 4)
		{
			$userName = 'Main Chieftan';
		}
			
		return $userName;
	}

}