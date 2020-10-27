<?php

class Router {

	protected $controller = 'mainController';
	protected $method = 'index';
	protected $params = [];

	function __construct () {
		// Calls parseUrl
		$url = $this->parseUrl();

		if(file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
			$this->controller = $url[0] . 'Controller';
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		if(isset($url[1])) {
			if(method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		require_once 'restricted.php';
		if(restricted(get_class($this->controller), $this->method)) {
			header("Location: /public/user/");
		} else {
			call_user_func_array([$this->controller, $this->method], $this->params);
		}
	}

	//Divides url into element divided by "/"	-	skips the first 3 entries
	public function parseUrl () {
		// Removes all illigal characters from URL
		$url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
		$url = explode('/', $url);
		//echo sizeof($url);
		return array_slice($url, 2);
	}

}
