<?php
class questionDB {
	//gets all the records and displays them really terribly
	public static function getQuestions($mysqli) {
		$res = $mysqli->query("SELECT * FROM questions");
		echo "<hr>";
		$res->data_seek(0);
		while($row = $res->fetch_assoc()) {

			echo '<hr><div class=\'questionBox\' id=\'' . $row['qID'] . '\'><table class="content"> <tr><td>' . $row['userQuestion'] . '</td></tr>
											<tr><td>' . $row['title'] . '</td></tr>
			 <tr><td><p class=\'questionParagraph\'>Question: ' . $row['question'] . '
			 <hr> 
			 <a class=admin id=\'delete' . $row['qID'] . '\'href="../DBClasses/DELETEQUESTION.php?id=' . $row['qID'] . '" onclick="myFunction()">Delete</a>
			  <a id=\'reply' . $row['qID'] . '\'href="#" onclick="openTextBox(' . $row['qID'] . ')">REPLY</a></p></td></tr></table>
			 <a href="#" onclick="stupidFunction()">Test Function!!</a></div>';

			 $returnedAnswers = self::getAnswersForQuestions($mysqli, $row['qID']);
			 if ($returnedAnswers != null)
			 {
			 	questionDB::getAnswersForQuestions($mysqli, $row['qID']);
			 }
		}
	}

	public static function getAnswersForQuestions($mysqli, $qid) {
		$res = $mysqli->query("SELECT * FROM answers a inner join question_answer qa on a.aID = qa.answerID inner join questions q on q.qID= qa.questionID where q.qID = " . $qid);
		$res->data_seek(0);
		while ($row = $res->fetch_assoc()) {
			echo '<div class=\'answerBox\' id=\'a' . $row['aID'] . '\'><table class="content"> <tr><td>' . $row['userAnswer'] . '</td></tr>
			 <tr><td><p class=\'answerParagraph\'>Answer: ' . $row['text'] . '</td>
			 <tr><td><a class=admin id=\'delete' . $row['aID'] . '\'href="../DBClasses/DELETEANSWER.php?aID=' . $row['aID'] . '&qID=' . $row['qID'] . '" onclick="myFunction()">Delete</a></td></tr></table>
			 <a href="#" onclick="stupidFunction()">Test Function!!</a></div>';
		}
	}

	public static function insertQuestion($mysqli) {
		$stmt = $mysqli->prepare("INSERT INTO questions (createdAt, qID, question, title, userQuestion) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $createdAt, $questionID, $question, $title, $userQuestion);
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
		$questionID = "";
		$userQuestion = "Bobby Harrington";
		$question = ($_GET["question"]);
		$title = ($_GET["title"]);
		$stmt->execute();

	}

	public static function deleteQuestion($mysqli, $idPassed) {
		$id = $idPassed;
		$stmt = $mysqli->prepare("DELETE FROM questions WHERE qID = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
	}

}