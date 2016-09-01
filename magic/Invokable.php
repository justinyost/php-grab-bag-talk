<?php
/**
 * Class to determine if a value is a positive integer.
 */
class IsPositiveInt {
	/**
	 * Magic method that runs when we instantiate the class.
	 *
	 * @param mixed $value The value to test.
	 * @return boolean True on the value being a positive integer.
	 */
	public function __invoke($value) {
		return ((int)$value == $value && $value > 0);
	}
}

$Invoke = new IsPositiveInt();
var_dump($Invoke(5));
var_dump($Invoke('5'));
var_dump($Invoke('5.0'));
var_dump($Invoke(-5));
var_dump($Invoke(5.1));
