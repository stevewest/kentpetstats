<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

namespace Controller;

use Controller\Base\Controller;
use Fuel\Core\View;

class Dashboard extends Controller
{

	public function action_index()
	{
		$this->title = 'Overview';
		$this->template->content = View::forge('dashboard/index');
	}

	public function action_notfound()
	{
		$this->template->content = View::forge('dashboard/404');
	}

}
