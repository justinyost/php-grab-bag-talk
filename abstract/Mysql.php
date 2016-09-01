<?php
require_once __DIR__ . DIRECTORY_SEPARATOR .'DatabaseAbstract.php';

/**
 * Class to connect to a Mysql database.
 */
class Mysql extends DatabaseAbstract {
	/**
	 * Connect to the database.
	 *
	 * @return bool Returns true on a successful connection.
	 */
	public function connect() {
		// @TODO: Connect to the database.
		$this->connection = true; // awesome stuff happened
		return true;
	}
}

var_dump((new Mysql())->connect());
var_dump((new Mysql())->disconnect());
