<?php
require_once __DIR__ . DIRECTORY_SEPARATOR .'ReceiptInterface.php';

/**
 * A simple Receipt class.
 */
class ReceiptSimple implements ReceiptInterface {
	/**
	 * Calculate the total for a Receipt.
	 *
	 * @param array $items A collection of items to sum up.
	 * @return float
	 */
	public function total(array $items = []) {
		return array_sum($items);
	}
}

/**
 * A Complex Receipt class.
 */
class ReceiptComplex implements ReceiptInterface {
	/**
	 * Calculate the total for a Receipt.
	 *
	 * @param array $items A collection of items to sum up.
	 * @return float
	 */
	public function total(array $items = []) {
		$total = 0.0;
		foreach ($items as $item) {
			$total += $item['price'];
		}
		return $total;
	}
}

echo (new ReceiptSimple)->total([1,2,5,6.7]);
echo "\n";
echo (new ReceiptComplex)->total([
	['price' => 1],
	['price' => 2],
	['price' => 5],
	['price' => 6.7],
]);
echo "\n";
