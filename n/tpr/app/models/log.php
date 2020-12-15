

<?php

class Log extends Database {

	public function get10() {
		$sql = "SELECT * FROM log ORDER BY time DESC LIMIT 10;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		return $alarms;

	}

	public function get10more() {
		$logNewCount = $_POST['logNewCount'];
		$sql = "SELECT * FROM log ORDER BY time DESC LIMIT $logNewCount;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$alarms = $stmt->fetchAll();

		$uSec = $input % 1000;
		$input = floor($input / 1000);

		$seconds = $input % 60;
		$input = floor($input / 60);

		$minutes = $input % 60;
		$input = floor($input / 60); 

		return $alarms;

	}

}
