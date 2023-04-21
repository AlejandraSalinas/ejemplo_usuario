<?php

class Database{
    private $host;
	private $personas;
	private $user;
	private $pass;
	public $conection;

	public function __construct()
	{

		$this->host       = constant('DB_HOST');
		$this->personas   = constant('PERSONAS');
		$this->user       = constant('DB_USER');
		$this->pass       = constant('DB_PASS');

		try {
			$this->conection = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->personas, $this->user, $this->pass);
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}

}