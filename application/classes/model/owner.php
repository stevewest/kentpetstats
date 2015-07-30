<?php


namespace Model;


class Owner
{

	public static function find()
	{
		$collection = \MongoConnection::instance()
			->collection('owners');

		return $collection->find(function ($query){
			/** @var \League\Monga\Query\Find $query */
			$query->orderBy('_id', 'asc');
		});
	}

}
