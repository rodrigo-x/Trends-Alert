<?php
/* Place Test cases generated on: 2012-04-10 23:52:23 : 1334112743*/
App::import('Model', 'Place');

class PlaceTestCase extends CakeTestCase {
	var $fixtures = array('app.place');

	function startTest() {
		$this->Place =& ClassRegistry::init('Place');
	}

	function endTest() {
		unset($this->Place);
		ClassRegistry::flush();
	}

}
?>