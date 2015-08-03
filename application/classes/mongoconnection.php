<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

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
		Config::load('mongo', true);

		$connection = Monga::connection(
			Config::get('mongo.dsn'),
			Config::get('mongo.options', [])
		);
		$this->database = $connection->database(Config::get('mongo.database'));
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
