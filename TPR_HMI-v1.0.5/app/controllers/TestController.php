<?php

class TestController extends Controller {

	public function index () {
		$this->view('test/publish.view');
	}

	public function publish() {
		$this->model('test')->publish($_POST['name1']);
		header('Location: /public/test/subscribe.view');
	}

	public function subscribe() {
		$this->model('test')->subscribe();
		$this->view('test/subscribe.view');
	}

}
