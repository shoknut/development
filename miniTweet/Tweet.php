<?php

class Tweet{
	protected $id;
	protected $pseudo;
	protected $content;
	protected $date;

	public function __construct($_id, $_pseudo, $_content, $_date){
		$this->id = $_id;
		$this->pseudo = $_pseudo;
		$this->content = $_content;
		$this->date = $_date;
	}

	function getPseudo(){
		return $this->pseudo;
	}

	function getContent(){
		return $this->content;
	}

	function getDate(){
		return $this->date;
	}
	function getId(){
		return $this->id;
	}


}

?>