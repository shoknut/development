<?php

class Database {
	protected $host;
	protected $dbname;
	protected $username;
	protected $password;

	public function __construct($_host, $_dbname, $_username, $_password){
		$this->host = $_host;
		$this->dbname = $_dbname;
		$this->username = $_username;
		$this->password = $_password;
	}

	public function PDOconnexion(){
		$pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec("SET NAMES UTF8");
	}

}


?>