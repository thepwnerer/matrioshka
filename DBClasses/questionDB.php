<?php
class questionDB {
	//gets all the records and displays them really terribly
	public static function getQuestions($mysqli) {
		$res = $mysqli->query("SELECT * FROM questions");
		echo "<hr>";
		$res->data_seek(0);
		while($row = $res->fetch_assoc()) {
			echo '<div class=\'questionBox\'><table class="questions"> <tr><td>' . $row['name'] . '</td></tr>
											<tr><td>' . $row['title'] . '</td></tr>
			 <tr><td><p class=\'questionParagraph\'>Question: ' . $row['question'] . ' 
			 <a href="../DBClasses/DELETE.php?id=' . $row['id'] . '" onclick="myFunction()">Delete</a></p></td></tr></table><hr>
			 <a href="#" onclick="stupidFunction()">WHAT IS THIS</a></div>';

		}
	}

	public static function insertQuestion($mysqli) {
		$stmt = $mysqli->prepare("INSERT INTO questions (createdAt, id, name, question, title) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $createdAt, $id, $name, $question, $title);

		// set parameters and execute
		date_default_timezone_set('America/Edmonton');
		$dateArray = getdate();
		//$dateArray['mday'] = $dateArray['mday'] - 1
		if ($dateArray['mday'] >= 0 & $dateArray['mday'] <= 9)
		{
		  $dateArray['mday'] = '0' .  $dateArray['mday'];
		}

		if ($dateArray['mon'] >= 1 & $dateArray['mon'] <= 9)
		{
			$dateArray['mon'] = '0' . $dateArray['month'];
		}
		//TODO :: not sure why date isn't inserting due to the fact that it is correctly formatted now ("YEAR-MONTH-DA")
		$insertDate = $dateArray['year'] . "-" . $dateArray['mon'] . "-" . $dateArray['mday'];

		$createdAt = $insertDate;
		$id = "";
		$name = "Bobby Harrington";
		$question = ($_GET["question"]);
		$title = ($_GET["title"]);
		$stmt->execute();

		echo "New records created successfully";
	}

	public static function deleteQuestion($mysqli, $idPassed) {
		$id = $idPassed;
		$stmt = $mysqli->prepare("DELETE FROM questions WHERE id = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
	}
}