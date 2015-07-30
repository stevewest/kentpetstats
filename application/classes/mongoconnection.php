<?php

use League\Monga;

class MongoConnection
{

	/**
	 * @var static
	 */
	protected static $instance;

	/**
	 * @var Monga\Database
	 */
	protected $database;

	/**
	 * @return static
	 */
	public static function instance()
	{
		if (static::$instance === null)
		{
			static::$instance = new static;
		}

		return static::$instance;
	}

	private function __construct()
	{
		$connection = Monga::connection();
		// TODO: Move this to config!
		$this->database = $connection->database('kentpet');
	}

	/**
	 * @param $name
	 *
	 * @return Monga\Collection
	 */
	public function collection($name)
	{
		return $this->database->collection($name);
	}

}
