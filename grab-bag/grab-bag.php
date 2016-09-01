<?php
/**
 * GrabBag of functions that demo other stuff.
 */
class GrabBag {
	/**
	 * Example of TypeHints in a method call.
	 *
	 * @param array $array Array input.
	 * @param ArrayObject $arrayObj An ArrayObject input.
	 * @return null
	 */
	public function typeHintsExample(array $array = [], ArrayObject $arrayObj) {
		return null;
	}

	/**
	 * An example of a closure.
	 *
	 * @return bool
	 */
	public function closureExample($localVar = null) {
		$result = function() use ($localVar) {
			return ($localVar === 'test');
		};

		return $result();
	}

	public function throwsException() {
		throw new BadMethodCallException('This is an exception being thrown.');
	}
}

$arrayObj = new ArrayObject([1,2,3]);
var_dump(
	(new GrabBag())->typeHintsExample([], $arrayObj)
);

var_dump(
	(new GrabBag())->closureExample('test')
);

var_dump(
	(new GrabBag())->throwsException()
);

var_dump(
	(new GrabBag())->typeHintsExample(true, $arrayObj)
);
