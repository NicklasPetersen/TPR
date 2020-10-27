<?php

class SetupController extends Controller {

	public function index () {
		$this->model('setup')->getFrames();
		$this->model('subscribe')->subscribe1("mqtt/plc2hmi/program");
		$this->view('setup/setup.view');
	}

	public function sendCommand () {
		$this->model('publish')->sendCommand($_POST);
	}

	public function updateFrame () {
		$this->model('setup')->updateFrame ($_POST);
		$this->model('publish')->sendCommand ($_POST);
	}

}
