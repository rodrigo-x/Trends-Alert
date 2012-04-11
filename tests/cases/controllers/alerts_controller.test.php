<?php
/* Alerts Test cases generated on: 2012-04-10 23:52:33 : 1334112753*/
App::import('Controller', 'Alerts');

class TestAlertsController extends AlertsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlertsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.alert', 'app.users', 'app.places');

	function startTest() {
		$this->Alerts =& new TestAlertsController();
		$this->Alerts->constructClasses();
	}

	function endTest() {
		unset($this->Alerts);
		ClassRegistry::flush();
	}

}
?>