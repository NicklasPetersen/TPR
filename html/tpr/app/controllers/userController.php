<?php

class UserController extends Controller {

	public function index () {
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
			header('Location: /tpr/public/main/');
			//$this->view('home/index');
		} else {
			$this->view('user/login');
		}
	}

	public function login () {
		if($this->model('User')->login($_POST['username'], $_POST['password'])){
			header('Location: /tpr/public/main/');
		} else {
			$this->view('user/login');
		}
	}

	public function menu () {
		$this->model('subscribe')->menu();
	}

	public function logout() {
		session_unset();
		header('Location: /tpr/public/user/');
	}

	/*public function all() {
		$this->model('User')->getAllUsers();
		$viewbag['users'] = $this->model('User')->getAllUsers();
		$this->view('user/all', $viewbag);
	}*/
}
