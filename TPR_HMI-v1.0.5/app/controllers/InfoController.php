<?php

class InfoController extends Controller {

	public function index () {
		$this->view('info/index');
	}

	public function restricted () {
		header('Location:	/public/user/');
		echo 'Welcome - you must be logged in';
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
