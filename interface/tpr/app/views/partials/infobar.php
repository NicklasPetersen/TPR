<?php

class Infobar
{
  public $conn;
  protected $servername = '192.168.29.56';
  protected $username   = 'myuser';
  protected $password   = 'password';
  protected $dbname     = 'tpr_db';

	public function __construct() {
		try {

			$this->conn = new PDO("mysql:host=$this->servername;port=3306;dbname=$this->dbname",
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

  public function get3() {
		$sql = "SELECT alarmLog.time, alarmLog.deviceWhich, systemAlarms.alarmId, systemAlarms.alarmDesc, systemAlarms.alarmCause, systemAlarms.alarmRemedy FROM alarmLog LEFT JOIN systemAlarms ON alarmLog.alarmId = systemAlarms.alarmId ORDER BY time DESC LIMIT 3;";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		return $alarms;

	}
}

?>


<div class="info-table">
  <div class="row" style=" border:1px solid #cbcbcb;">
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;">Time</p>
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;">Alarm</p>
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;">Description</p>
  </div>

  <?php
  $alarmClass = new Infobar;
  $alarms = $alarmClass->get3();
  foreach($alarms as $alarm) :
  ?>
  <div class="row" style=" border:1px solid #cbcbcb;">
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;"><?= $alarm['time']?></p>
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;"><?= $alarm['alarmId']?></p>
    <p style="font-size: 11px; width: 29%; display: inline-block; padding-left: 1em;"><?= $alarm['alarmDesc']?></p>
  </div>

  <?php endforeach; ?>

</div>
