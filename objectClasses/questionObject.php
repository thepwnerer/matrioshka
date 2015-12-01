<?php
class questionObject {
	public $title;
	public $name;
	public $question;
	public $createdAt;
	public $id;

	//adds all values for an instance of questionObject
	function __construct($title, $name, $question, $createdAt, $id) {
		$this->title = (string) $title;
		$this->name = (string) $name;
		$this->question = (string) $question;
		$this->createdAt = (string) $createdAt;
		$this->id = (integer) $id;
	}

	public function __toString() {
		print "The title and maker of this question is " . $title . " " . $name;
	}

}
?>