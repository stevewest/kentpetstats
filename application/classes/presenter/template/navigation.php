<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

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
