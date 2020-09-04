<?php

class UserController extends Controller {

	public function index () {
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
			$this->view('/TPR_HMI-v1.0.5/public/home/');
		} else {
			$this->view('user/login');
		}
	}

	public function login () {
		if($this->model('User')->login($_POST['username'], $_POST['password'])){
			echo "hi";
			$this->view('/TPR_HMI-v1.0.5/public/home/');

			//header('Location: /TPR_HMI-v1.0.5/public/home/');
		} else {
			echo "Hello";
			$this->view('user/login');
		}
	}

	public function logout() {
		session_unset();
		$this->view('user/login');
	}

	/*public function all() {
		$this->model('User')->getAllUsers();
		$viewbag['users'] = $this->model('User')->getAllUsers();
		$this->view('user/all', $viewbag);
	}*/
}
