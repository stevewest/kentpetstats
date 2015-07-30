<?php
/**
 * @author Steve "uru" West <steven.david.west@gmail.com>
 * @license proprietary http://opensource.org/licenses/MIT
 * @link https://bitbucket.org/stevewest/maxikitten
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
