<?php

class SignupController extends Controller {

	public function index () {
		$this->view('signup/register');
	}

	public function register() {
		$_SESSION['msg'] = "You just came from register!";
		$this->model('signup')->register($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['access']);
		$this->view('signup/register');
	}

}
