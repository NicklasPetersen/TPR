<?php

class AdjustController extends Controller {

	public function index () {
		$this->view('adjust/adjust.view');
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
			header('Location: /public/adjust/loggedout');
		} else {
			echo 'You can only log out with a post method';
		}
	}

	public function loggedout() {
		$_SESSION['msg'] = 'You are now logged out';
	}

}
