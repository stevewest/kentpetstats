<?php

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
		$this->template->title = $this->title;

		return parent::after($response);
	}
}
