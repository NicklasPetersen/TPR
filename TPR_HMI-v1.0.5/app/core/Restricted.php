<?php

function restricted ($controller, $method) {

	$restricted_urls = array(	'MainController' 		=> array('restricted', 'index'),
														'UserController' 		=> array(''),
														'SignupController'	=> array(''),
														'InfoController'		=> array(''),
														'ToolController'		=> array('restricted', 'index'),
														'AdjustController'	=> array('restricted', 'index'),
														'ManualController'	=> array('rescricted', 'index'),
														'VisionController'	=> array('index'),
														'SetupController'		=> array('index'),
														'LogController'			=> array('index'),
														'AlarmController'		=> array('index'),
														'TestController'		=> array('index', 'publish', 'subscribe')
													);

	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		return false;
	} else if( isset($controller) && in_array($method, $restricted_urls[$controller])) {
		return true;
	} else {
		return false;
	}
}
