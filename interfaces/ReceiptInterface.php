<?php
/**
 * Interface to manage a Receipt.
 */
interface ReceiptInterface {
	/**
	 * Calculate the total for a Receipt.
	 *
	 * @param array $items A collection of items to sum up.
	 * @return float
	 */
	public function total(array $items = []);
}
