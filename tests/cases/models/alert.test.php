<?php
/* Alert Test cases generated on: 2012-04-10 23:52:20 : 1334112740*/
App::import('Model', 'Alert');

class AlertTestCase extends CakeTestCase {
	var $fixtures = array('app.alert', 'app.users', 'app.places');

	function startTest() {
		$this->Alert =& ClassRegistry::init('Alert');
	}

	function endTest() {
		unset($this->Alert);
		ClassRegistry::flush();
	}

}
?>