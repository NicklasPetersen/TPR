

<?php

class Log extends Database {

	public function get10() {
		$sql = "SELECT * FROM log ORDER BY time DESC LIMIT 10;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$logs = $stmt->fetchAll();


		// Convert runtime to minutes
		$i = 0;
		foreach ($logs as $log) {
			$uSec = $log['runTime'] % 1000;
			if ($uSec < 100) {
				$uSec = "0". $uSec;
			}
			$temp = floor($log['runTime'] / 1000);

			$sec = $temp % 60;
			if ($sec < 10) {
				$sec = "0".$sec;
			}
			$temp = floor($temp / 60);

			$min = $temp % 60;
			$temp = floor($temp / 60);


			$logs[$i]['minutes'] = "$min:$sec:$uSec min";
			++$i;
		}


		return $logs;

	}

	public function get10more() {
		$logNewCount = $_POST['logNewCount'];
		$sql = "SELECT * FROM log ORDER BY time DESC LIMIT $logNewCount;";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$logs = $stmt->fetchAll();

		// Convert runtime to minutes
		$i = 0;
		foreach ($logs as $log) {
			$uSec = $log['runTime'] % 1000;
			if ($uSec < 100) {
				$uSec = "0". $uSec;
			}
			$temp = floor($log['runTime'] / 1000);

			$sec = $temp % 60;
			if ($sec < 10) {
				$sec = "0".$sec;
			}
			$temp = floor($temp / 60);

			$min = $temp % 60;
			$temp = floor($temp / 60);


			$logs[$i]['minutes'] = "$min:$sec:$uSec min";
			++$i;
		}

		return $logs;

	}

}
