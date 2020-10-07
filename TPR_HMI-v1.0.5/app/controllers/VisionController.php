<?php

class VisionController extends Controller {

	public function index () {
		$this->view('vision/vision.view');
	}

	public function sendCommand() {
		$this->model('publish')->sendCommand($_POST);
	}


}
