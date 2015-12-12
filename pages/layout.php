<html>
	<head>
		<style>
		<?php include '../css/styles.css';?>
		</style>
		<?php include '../Objectclasses/questionObject.php';
		include "../DBClasses/connectDB.php";
		include "../DBClasses/questionDB.php";
		$mysqli = connectDB::connect();
		$collabExample = new questionObject('What makes the world go round?', 'Anon', 'I was wondering what makes the world go round. K, let me know....mmmkay?', 'BURGER', '3');
		?>
	</head>

	<body>
		<?php 
		if ($_GET["content"] != 'login')
		{
			include 'header.php';
		}
		?>
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
	</body>



</html>
