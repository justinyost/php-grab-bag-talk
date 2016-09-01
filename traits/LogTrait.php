<?php
/**
 * Trait to provide a log method.
 */
trait LogTrait {
	/**
	 * Logs the passed in message.
	 *
	 * @param string $message The message to log.
	 * @return void
	 */
	protected function log($message) {
		// @TODO: Actually log the message.
		echo "{$message}\n";
	}
}
