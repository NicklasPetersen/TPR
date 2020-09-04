<?php

class SignupController extends Controller {

	public function index () {
		$this->view('signup/register');
	}

	public function register() {
		$this->model('Signup')->register($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['access']);
		 $this->view('signup/register');
	}

}
