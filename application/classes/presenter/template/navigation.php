<?php

use Model\Owner;

class Presenter_Template_Navigation extends Presenter
{

	public function view()
	{
		$owners = [];

		foreach (Owner::find() as $id => $owner)
		{
			$owners[$id] = $owner;
			$owners[$id]['active'] = Str::ends_with($_SERVER['REQUEST_URI'], 'pets/'.$owner['_id']);
		}

		$this->set('owners', $owners);
	}


}
