<?php

class MainController extends Controller {

	/**
	 * Gets run when main page is opened
	 *
	 * @return viewbag
	 */
	public function index () {
		$viewbag['main_info'] = $this->model('subscribe')->subscribe2("mqtt/plc2hmi/velocity", "mqtt/plc2hmi/program");
		$viewbag['program'] = $this->model('main')->showProgram($viewbag['main_info']['mqtt/plc2hmi/program']);
		$viewbag['opState'] = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/opState");
		$this->view('main/main.view', $viewbag);
	}

	/**
	 * Ajax call this function main page is opened
	 *
	 * @return json_object
	 */
	public function opState() {
		$viewbag['opState'] = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/opState");
	}

	/**
	 * This function will be called by Ajax when operation buttons gets pressed
	 *
	 * @return void
	 */
	public function main() {
		$this->model('publish')->mainOperation($_POST);

		$this->opState();
	}

	public function other ($param1 = 'first parameter', $param2 = 'second parameter') {
		$user = $this->model('User');
		$user->name = $param1;
		$viewbag['username'] = $user->name;
		$this->view('main/main.view', $viewbag);
	}


}
