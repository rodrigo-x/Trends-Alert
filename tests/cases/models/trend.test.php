<?php
/* Trend Test cases generated on: 2012-04-10 23:52:27 : 1334112747*/
App::import('Model', 'Trend');

class TrendTestCase extends CakeTestCase {
	var $fixtures = array('app.trend', 'app.places');

	function startTest() {
		$this->Trend =& ClassRegistry::init('Trend');
	}

	function endTest() {
		unset($this->Trend);
		ClassRegistry::flush();
	}

}
?>