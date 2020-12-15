<?php

class RecipeController extends Controller {

	public function index () {

    $viewbag['recipe'] = $this->model('subscribe')->subscribe1("mqtt/plc2hmi/recipe");
		$viewbag['adjust'] = $this->model('adjust')->show($_SESSION['recipe']);
		$this->view('recipe/recipe.view', $viewbag);
	}

  public function update () {
		$this->model('publish')->sendCommand($_POST);
		$this->model('adjust')->show($_POST);

		$this->view('recipe/recipe.view', $viewbag);
	}

}
