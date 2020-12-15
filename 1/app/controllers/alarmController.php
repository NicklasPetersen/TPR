<?php

class AlarmController extends Controller {

	public function index () {

		$viewbag['alarm'] = $this->model('alarm')->get10();

		$this->view('alarm/alarm.view', $viewbag);
	}

	public function getMore () {
		$viewbag['alarm'] = $this->model('alarm')->get10more();
		$this->view('alarm/moreAlarms', $viewbag);
	}

	public function currentAlarm () {
		$viewbag['alarm'] = $this->model('alarm')->getLatest();
		$this->view('alarm/alarmCurrent', $viewbag);
	}

	public function acknowledgeAlarm () {
		$this->model('publish')->sendCommand($_POST);

		$_SESSION['value'] = 0;
		$_SESSION['topic'] = "php-mqtt/hmi2plc/alarm";
		usleep(1000);
		$this->model('publish')->sendCommand($_SESSION);
	}


}
