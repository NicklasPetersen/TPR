<?php
require_once "mqtt_config.php";

/**
 * Use: For not having to write \PhpMqtt\... when defining objects
 */
use \PhpMqtt\Client\MQTTClient;
use \PhpMqtt\Client\ConnectionSettings;

/**
 * This is a class for MQTT connection
 */

class MQTTConn extends MQTT_Config {

 	public $conn;

 	public function __construct() {
    /*try {*/

			$this->conn = new MQTTClient($this->host, $this->port, $this->clientId);

      $connectionSettings = new ConnectionSettings();
      $this->conn->connect($this->username, $this->password, $connectionSettings, true);
    /*} catch (MQTTClientException $e) {
      echo "Error: " . $e->getMessage();
    }*/
 	}

 	public function __destruct() {
 		$this->conn->close();
 	}

}
