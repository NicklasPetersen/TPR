<?php

class AdjustController extends Controller {

	public function index () {
		$viewbag['recipe'] = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/recipe");
		$viewbag['adjust'] = $this->model('adjust')->show($_SESSION['recipe']);
		$this->view('adjust/adjust.view', $viewbag);


	}

	public function update () {
		$this->model('publish')->publishInt($_POST);

		header('Location: /public/adjust/update');
	}


}
