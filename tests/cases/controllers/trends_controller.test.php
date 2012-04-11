<?php
/* Trends Test cases generated on: 2012-04-10 23:52:46 : 1334112766*/
App::import('Controller', 'Trends');

class TestTrendsController extends TrendsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TrendsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.trend', 'app.places');

	function startTest() {
		$this->Trends =& new TestTrendsController();
		$this->Trends->constructClasses();
	}

	function endTest() {
		unset($this->Trends);
		ClassRegistry::flush();
	}

}
?>