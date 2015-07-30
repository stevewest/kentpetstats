<?php


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
