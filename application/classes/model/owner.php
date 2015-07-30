<?php

namespace Model;

use MongoConnection;

class Owner
{

	public static function find()
	{
		$collection = MongoConnection::instance()
			->collection('owners');

		return $collection->find(function ($query){
			/** @var \League\Monga\Query\Find $query */
			$query->orderBy('_id', 'asc');
		});
	}

	public static function findOne($username)
	{
		$collection = MongoConnection::instance()
			->collection('owners');

		$user = $collection->findOne(function($query) use ($username){
			/** @var \League\Monga\Query\Find $query */
			$query->where('_id', $username);
		});

		$pets = MongoConnection::instance()
			->collection('pets')
			->find(function($query) use ($user){
				/** @var \League\Monga\Query\Find $query */
				$query->andWhereIn('_id', $user['pets']);
			});

		$user['pets'] = $pets->toArray();

		return $user;
	}

}
