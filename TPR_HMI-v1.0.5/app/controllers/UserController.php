<?php

class UserController extends Controller {

	public function index () {
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
			$this->view('home/');
		} else {
			$this->view('user/login');
		}
	}

	public function login () {
		if($this->model('User')->login($_POST['username'], $_POST['password'])){
			echo "hi";
			//$this->view('home/index');
			header('Location: /public/home/');
			//header('Location: /public/home');
		} else {
			$this->view('user/login');
		}
	}

	public function logout() {
		session_unset();
		header('Location: /public/user/');
		//$this->view('user/login');
	}

	/*public function all() {
		$this->model('User')->getAllUsers();
		$viewbag['users'] = $this->model('User')->getAllUsers();
		$this->view('user/all', $viewbag);
	}*/
}
