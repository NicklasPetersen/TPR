

<?php

class Alarm extends Database {

	public function get10() {
		$sql = "SELECT alarmLog.time, alarmLog.deviceWhich, systemAlarms.alarmId, systemAlarms.alarmDesc, systemAlarms.alarmCause, systemAlarms.alarmRemedy FROM alarmLog LEFT JOIN systemAlarms ON alarmLog.alarmId = systemAlarms.alarmId ORDER BY time DESC LIMIT 10;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		return $alarms;

	}

	public function get10more() {
		
		$alarmNewCount = $_POST['alarmNewCount'];
		$sql = "SELECT alarmLog.time, alarmLog.deviceWhich, systemAlarms.alarmId, systemAlarms.alarmDesc, systemAlarms.alarmCause, systemAlarms.alarmRemedy FROM alarmLog LEFT JOIN systemAlarms ON alarmLog.alarmId = systemAlarms.alarmId ORDER BY time DESC LIMIT $alarmNewCount;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		return $alarms;

	}

  public function getLatest() {
		$sql = "SELECT alarmLog.time, alarmLog.deviceWhich, systemAlarms.alarmId, systemAlarms.alarmDesc, systemAlarms.alarmCause, systemAlarms.alarmRemedy FROM alarmLog LEFT JOIN systemAlarms ON alarmLog.alarmId = systemAlarms.alarmId ORDER BY time;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		return $alarms[0];

	}

	public function alarmDB($alarmNo) {
    $sql = "SELECT * from tpr_db.systemAlarms WHERE alarmId = :No";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('No', $alarmNo);
    $stmt->execute();
    $alarm = $stmt->fetch();

    if (isset($alarm[0]) && sizeof($alarm) >= 1) {
      $description        = $alarm[0]['alarmDesc'];
      $cause              = $alarm[0]['alarmCause'];
      $remedy             = $alarm[0]['alarmRemedy'];
      $device             = $alarm[0]['alarmLocation'];

      $alarm['severity']  = intval(strstr($description, '-', true));    // Finds all before the '-'
      $_SESSION['alarm'] = $alarm;
      return $alarm;
    } else {
      return $id;
    }
  }

}
