<?php
class questionDB {
	//gets all the records and displays them really terribly
	public static function getQuestions($mysqli) {
		$res = $mysqli->query("SELECT * FROM questions");
		echo "<hr>";
		$res->data_seek(0);
		while($row = $res->fetch_assoc()) {
			echo '<table class="questions"> <tr><td>' . $row['name'] . '</td></tr>
											<tr><td>' . $row['title'] . '</td></tr>
			 <tr><td>Question: ' . $row['question'] . ' 
			 <a href="../DBClasses/DELETE.php?id=' . $row['id'] . '" onclick="myFunction()">Delete</a></td></tr></table><hr>';

		}
	}

	public static function insertQuestion($mysqli) {
		$stmt = $mysqli->prepare("INSERT INTO questions (createdAt, id, name, question, title) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $createdAt, $id, $name, $question, $title);

		// set parameters amnd execute
		$createdAt = getdate();
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