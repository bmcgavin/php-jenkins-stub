<?php

class CHANGEMESteps extends CucumberSteps {

	public function beforeAll() {
		//Anything you want.
	}

	/**
	* Given /^I have instanciated a test class$/
	**/
	public function stepIHaveInstanciatedATestClass() {
		$this->aGlobals['h'] = new CHANGEME();
		$this->assertTrue(is_object($this->aGlobals['h']));
	}

	/**
	* Given /^I have called hello$/
	**/
	public function stepIHaveCalledHello() {
		$this->aGlobals['h']->hello();
		$this->assertTrue(true);
	}

	/**
	* Then /^something should happen$/
	**/
	public function stepSomethingShouldHappen() {
		$this->assertEquals('hello', $this->aGlobals['h']->hello());
	}
}



