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

	public function restricted () {
		header('Location:	/public/user/');
		echo 'Welcome - you must be logged in';
	}

	public function login() {
		$_SESSION['logged_in'] = true;
		$this->view('login/login');
	}

	public function logout() {

		if($this->post()) {
			session_unset();
			header('Location: /public/main/loggedout');
		} else {
			echo 'You can only log out with a post method';
		}
	}

	public function loggedout() {
		$_SESSION['msg'] = 'You are now logged out';
	}

}
