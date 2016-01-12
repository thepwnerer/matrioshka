<style>
<?php include '../css/styles.css'; ?>
</style>


<div id='login'>
	<h1 id='logo'> Friends!! </h1>
	<form method='post' action='../DBClasses/LOGIN.php'>
		<label>Username</label>
		<input type='text' name='username' />
		<label>Password</label>
		<input type='password' name='password' />
		<input type='submit' value='enter!'/>
	</form>
	<br>
	<?php
		if($_GET['hack'] == 'yes')
		{
			echo 'Please desist from unauthorized access! Or just ask max for the login.';
		}
		elseif ($_GET['hack'] == 'no')
		{
			echo 'Username and/or password is incorrect';
		}
		else 
		{
			echo '';
		}
	?>
</div>