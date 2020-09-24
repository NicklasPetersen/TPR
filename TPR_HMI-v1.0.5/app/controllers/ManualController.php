<?php

class ManualController extends Controller {

	public function index () {
		$this->view('manual/man.view');
	}

	public function sendTrue () {
		$this->model('publish')->manPublishTrue($_POST);
	}

	public function sendFalse () {
		$this->model('publish')->manPublishFalse($_POST);
	}

}
