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

	public function before()
	{
		parent::before();
		$this->template->header = '';
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

		return parent::after($response);
	}
}
