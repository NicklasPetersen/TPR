<?php

function restricted ($controller, $method) {

	$restricted_urls = array(
														'MainController' 		=> array('restricted', 'index', 'main', 'opState'),
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
														'RecipeController'	=> array('index')
													);
	$restricted_urls_full = array(
														'MainController' 		=> array(''),
														'UserController' 		=> array(''),
														'SignupController'	=> array(''),
														'InfoController'		=> array(''),
														'ToolController'		=> array(''),
														'AdjustController'	=> array(''),
														'ManualController'	=> array(''),
														'VisionController'	=> array(''),
														'SetupController'		=> array(''),
														'LogController'			=> array(''),
														'AlarmController'		=> array(''),
														'RecipeController'	=> array('')
													);

	$restricted_urls_operator = array(
														'MainController' 		=> array(''),
														'UserController' 		=> array(''),
														'SignupController'	=> array(''),
														'InfoController'		=> array(''),
														'ToolController'		=> array(''),
														'AdjustController'	=> array('restricted', 'index'),
														'ManualController'	=> array(''),
														'VisionController'	=> array('index'),
														'SetupController'		=> array('index'),
														'LogController'			=> array('index'),
														'AlarmController'		=> array('index'),
														'RecipeController'	=> array('')
													);

	// Return true, if page is restricted
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && isset($controller) && !in_array($method, $restricted_urls_operator[$controller]) && $_SESSION['access'] == 2) {
		return false;
	} else if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && isset($controller) && !in_array($method, $restricted_urls_full[$controller]) && $_SESSION['access'] == 1) {
		return false;
	} else if( isset($controller) && in_array($method, $restricted_urls[$controller])) {
		return true;
	} else {
		return false;
	}
}
