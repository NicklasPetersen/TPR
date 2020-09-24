<?php

class MainController extends Controller {

	/**
	 * Gets run when main page is opened
	 *
	 * @return viewbag
	 */
	public function index () {
		$user = $this->model('User');
		$viewbag['username'] = $user->name;
		$this->view('main/main.view', $viewbag);
	}

	/**
	 * Ajax call this function main page is opened
	 *
	 * @return json_object
	 */
	public function opState() {
		$this->model('subscribe')->mainOperation();
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
