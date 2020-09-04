<?php

require_once 'db_config.php';

class Database extends DB_Config {

	public $conn;

	public function __construct() {
		try {
			// Set data source name
			$dsn = 'mysql:host='. $this->servername. 'dbname='. $this->dbname;

			// Create PDO instance
			//$this->conn  = new PDO($dns, $this->username, $this->password);

			$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",
			$this->username,
			$this->password,
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}

	public function __destruct() {
		$this->conn = null;
	}

}
