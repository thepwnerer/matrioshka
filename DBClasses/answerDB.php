<?php
class answerDB {
	//create the answer
	public static function insertAnswer($mysqli, $qid, $userName)
	{
		$stmt = $mysqli->prepare("INSERT INTO answers (createdAt, aID, text, userAnswer) VALUES (?, ?, ?, ?)");
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
		$answerID = null;
		$text = ($_GET["answer"]);
		$user = "$userName";
		$stmt->execute();

		return $mysqli->insert_id;
	}

	public static function insertQuestionAnswer($mysqli, $aID)
	{
		$stmt2 = $mysqli->prepare("INSERT INTO question_answer (answerID, questionID) VALUES (?,?)");
		$stmt2->bind_param("ii", $answerID, $qid);

		$answerID = $aID;
		$qid = $_GET["qid"];
		$stmt2->execute();
	}

	public static function deleteAnswer($mysqli, $qid, $aid) {

		$stmt = $mysqli->prepare("DELETE FROM question_answer WHERE answerID = ? and questionID = ?");
		$stmt->bind_param("ii", $aid, $qid);
		$stmt->execute();

		$stmt2 = $mysqli->prepare("DELETE FROM answers WHERE aID = ?");
		$stmt2->bind_param("i", $aid);
		$stmt2->execute();
	}
}