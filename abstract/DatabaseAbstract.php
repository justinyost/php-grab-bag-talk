<?php
/**
 * Abstract class for implementing a Database connection.
 */
abstract class DatabaseAbstract {
	/**
	 * The connection to the database.
	 */
	protected $connection;

	/**
	 * Connect to the database.
	 *
	 * @return bool Returns true on a successful connection.
	 */
	abstract public function connect();

	/**
	 * Disconnects from the database.
	 *
	 * @return bool Returns true on a successful disconnect.
	 */
	public function disconnect() {
		unset($connection);
		return true;
	}
}
