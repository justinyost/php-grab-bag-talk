<?php
require_once __DIR__ . DIRECTORY_SEPARATOR .'LogTrait.php';

/**
 * Model class handles doing the work of saving and pulling data from a database.
 */
class Model {
	/**
	 * Use the LogTrait to log what is occurring in the Model class.
	 */
	use LogTrait;

	/**
	 * Save some data.
	 *
	 * @param array $data An array of data to save.
	 * @return void
	 */
	public function save(array $data = []) {
		$this->log('Save started.');
		//@TODO: actually save some data
		$this->log('Save completed.');
	}
}

(new Model)->save([]);
