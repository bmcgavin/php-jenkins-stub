<?php

class CHANGEMETests extends PHPUnit_Framework_TestCase {

	public function testCHANGEME() {
		$cm = new CHANGEME();
		$this->assertEquals($cm->hello(), 'hello');
	}
}

