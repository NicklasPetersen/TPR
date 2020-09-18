<?php
//require __DIR__ . "/../vendor/php-mqtt/client/src/MQTTClient.php";
//require_once "mqtt_config.php";
//namespace \PhpMqtt\Client\;

/**
 * This is a class for MQTT connection
 */

require_once 'db_config.php';

class Mqttconn extends DB_Config {
  public $client;
	public function __construct() {
		try {
			$this->client = new PDO("mysql:host=$this->servername;dbname=$this->dbname",
			$this->username,
			$this->password,
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	public function __destruct() {
		$this->conn = null;
	}


  /*protected $host       = 'localhost';
  protected $port       = 1883;
  protected $password   = 'password';
  protected $username   = 'mqtt';
  protected $clientId   = 'phpMQTT-publisher';

 	public $conn;

 	public function __construct() {
    try {

			$this->conn = new MQTTClient($this->host, $this->port, $this->clientId);
      $this->conn->connect();
    } catch (MQTTExeption $e) {
      echo "Error: " . $e->getMessage();
    }
 	}

 	public function __destruct() {
 		$this->conn->close();
 	}*/

}
