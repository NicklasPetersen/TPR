<?php

class TestController extends Controller {

	public function index () {
		$this->view('test/publish.view');
	}

	public function publish() {
		//$this->model('Test')->publish($_POST['name1']);
		//header('Location: /public/test/subscribe');
	}

	public function subscribe() {
		$this->model('Test')->subscribe();
		$this->view('test/subscribe.view');
	}

}
