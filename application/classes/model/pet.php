<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

namespace Model;

use MongoConnection;
use MongoId;

class Pet
{

	public static function find($id)
	{
		$collection = MongoConnection::instance()
			->collection('pets');

		return $collection->findOne(function($query) use ($id){
			/** @var \League\Monga\Query\Find $query */
			$query->where('_id', new MongoId($id));
		});
	}

}
