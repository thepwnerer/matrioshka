<?php
class answerDB {
	//create the answer
	public static function insertAnswer($mysqli, $qid)
	{
		$stmt = $mysqli->prepare("INSERT INTO answers (createdAt, id, text, user) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("siss", $createdAt, $answerID, $text, $user);
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

		$insertDate = $dateArray['year'] . "-" . $dateArray['mon'] . "-" . $dateArray['mday'];

		$createdAt = $insertDate;
		$answerID="";
		$text=($_GET["answer"]);
		$user="Shania Mania";
		$stmt->execute();
	}

	public static function insertQuestionAnswer($mysqli)
	{
		$stmt2 = $mysqli->prepare("INSERT INTO question_answer (answerID, questionID) VALUES (?,?)");
		$stmt2->bind_param("ii", $answerID, $qid);

		$answerID = "";
		$qid = $_GET["qid"];
		$stmt2->execute();
	}
}