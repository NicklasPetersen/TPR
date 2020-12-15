<?php

class LogController extends Controller {

	public function index () {
		$viewbag['log'] = $this->model('log')->get10();

		$this->view('log/log.view', $viewbag);
	}

	public function getMore () {
		$viewbag['log'] = $this->model('log')->get10more();
		$this->view('log/moreLogs', $viewbag);
	}

}
