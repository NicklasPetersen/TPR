<?php

class AdjustController extends Controller {

	public function index () {
		$this->model('subscribe')->AdjustRecipe();

		$this->model('adjust')->show($_POST);
		$this->view('adjust/adjust.view');
	}



	public function showSpecific() {
		$viewbag['specific'] = $this->model('adjust')->showSpecific($_POST);
		$this->view('adjust/adjust.view');
	}

	public function update () {
		$_SESSION['update-adjust'] = $this->model('adjust')->show();
		$this->view('adjust/adjust.view');
	}


}
