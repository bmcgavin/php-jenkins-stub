<?php

class CalculatorSteps extends CucumberSteps {

/**
* Given /^I have entered 50 into the calculator$/
**/
public function stepIHaveEntered50IntoTheCalculator() {
    self::markPending();
}

/**
* Given /^I have entered 70 into the calculator$/
**/
public function stepIHaveEntered70IntoTheCalculator() {
    self::markPending();
}

/**
* When /^I press add$/
**/
public function stepIPressAdd() {
    self::markPending();
}

/**
* Then /^the result should be 120 on the screen$/
**/
public function stepTheResultShouldBe120OnTheScreen() {
    self::markPending();
}

}
