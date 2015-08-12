<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

namespace Controller\Base;

use Controller_Template;
use Messages;
use Presenter;
use View;

/**
 * Base controller to share common logic
 */
abstract class Controller extends Controller_Template
{

	public $template = 'template';
	protected $title = '';
	protected $page_title = '';

	public function before()
	{
		parent::before();
	}

	public function after($response)
	{
		$this->template->messages = '';

		if (Messages::has())
		{
			$this->template->messages = View::forge('template/messages', [
				'messages' => Messages::get()
			]);
			Messages::flush();
		}

		$this->template->navigation = Presenter::forge('template/navigation');
		$this->template->set('title', $this->title);
		$this->template->set('page_title', $this->page_title, false);

		return parent::after($response);
	}
}
