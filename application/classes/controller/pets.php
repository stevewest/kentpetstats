<?php

namespace Controller;

use Controller\Base\Controller;
use Model\Owner;

class Pets extends Controller
{

	public function action_index($username)
	{
		$owner = Owner::findOne($username);

		$this->title = $owner['_id'];
		$this->template->content = \View::forge('pets/index', ['owner' => $owner]);
	}

}
