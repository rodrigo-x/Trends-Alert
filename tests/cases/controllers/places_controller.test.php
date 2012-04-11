<?php
/* Places Test cases generated on: 2012-04-10 23:52:38 : 1334112758*/
App::import('Controller', 'Places');

class TestPlacesController extends PlacesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlacesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.place');

	function startTest() {
		$this->Places =& new TestPlacesController();
		$this->Places->constructClasses();
	}

	function endTest() {
		unset($this->Places);
		ClassRegistry::flush();
	}

}
?>