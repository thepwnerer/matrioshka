<?php
include "../conf.php";
	session_start();
if($_SESSION['verified'] != 'yes')
  {
    header($rootpath . 'pages/logIn.php?hack=yes');
  }
  //I do not know why this is not working. 
// if($_SESSION['user'] != 'user' || $_SESSION['user'] != 'admin')
//   {
//     header('Location: http://localhost/testPHPProject/pages/logIn.php?hack=yes');
//   }
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		<?php include '../lightbox2-master/src/css/lightbox.css';?>
		<?php include '../css/styles.css';?>
		<?php include '../css/pure-release-0.6.0/pure.css';?>
		</style>
		<?php include '../Objectclasses/questionObject.php';
		include "../DBClasses/connectDB.php";
		include "../DBClasses/questionDB.php";
		$mysqli = connectDB::connect();
		?>
	</head>

	<body>
		<?php 
		if ($_GET["content"] != 'login')
		{
			include 'header.php';
		}
		?>
		<br>
		<?php
			$content = ($_GET["content"]);

			if ($content == ``) {
				$content = 'home';
			}
			include '/'.$content.'.php';
		?>
			<?php include 'footer.php';?>
		<!-- this is where my javascript is going!! -->
		<script src="../js/jquery-2.1.4.js"></script>
		<script src="../js/main.js"></script> 
		<script src="../lightbox2-master/src/js/lightbox.js"></script>
	</body>



</html>
