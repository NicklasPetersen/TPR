<?php
use Spatie\Async\Pool;

class MainController extends Controller {



	/**
	 * Gets run when main page is opened
	 *
	 * @return viewbag
	 */
	public function index () {
		$pool = Pool::create();
		/*$pool->add(function() {
			echo "1 " ;
			$this->model('subscribe')->subscribe1("mqtt/plc2hmi/opState");
		});

		$pool->add(function() {
			echo "2.1 ";
			$this->model('subscribe')->subscribe1("mqtt/plc2hmi/recipe");
		})
		->then(function() {
			echo "2.2 ";
			$viewbag['main_info'] = $this->model('main')->show($_SESSION['recipe']);
		});

		$pool->add(function() {
			echo "3.1 ";
			$program = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/program");
		})
		->then(function() {
			echo "3.2 ";
			$viewbag['program'] = $this->model('main')->showProgram($_SESSION['program']);
		});
		$pool->wait();*/

		$this->model('subscribe')->subscribe1("mqtt/plc2hmi/opState");
		$this->model('subscribe')->subscribe1("mqtt/plc2hmi/recipe");
		$viewbag['main_info'] = $this->model('main')->show($_SESSION['recipe']);
		$program = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/program");
		$viewbag['program'] = $this->model('main')->showProgram($_SESSION['program']);

		$this->view('main/main.view', $viewbag);
	}

	/**
	 * This function will be called by Ajax when operation buttons gets pressed
	 *
	 * @return void
	 */
	public function main() {
		$this->model('publish')->mainOperation($_POST);
	}


	public function other ($param1 = 'first parameter', $param2 = 'second parameter') {
		$user = $this->model('user');
		$user->name = $param1;
		$viewbag['username'] = $user->name;
		$this->view('main/main.view', $viewbag);
	}


}
