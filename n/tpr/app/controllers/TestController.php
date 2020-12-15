<?php

class TestController extends Controller {

	public function index () {
		$this->view('test/publish.view');
	}

	public function subscribe () {
		$this->view('test/subscribe.view');
	}

}
