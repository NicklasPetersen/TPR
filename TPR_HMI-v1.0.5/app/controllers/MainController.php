<?php

class MainController extends Controller {

	public function index () {
		$user = $this->model('User');
		$viewbag['username'] = $user->name;
		$this->view('main/main.view', $viewbag);
	}

	public function other ($param1 = 'first parameter', $param2 = 'second parameter') {
		$user = $this->model('User');
		$user->name = $param1;
		$viewbag['username'] = $user->name;
		$this->view('main/main.view', $viewbag);
	}


}
