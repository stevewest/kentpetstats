<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

class Messages
{

	protected static $messages = [];

	public static function _init()
	{
		static::$messages = Session::get_flash('messages', []);

		// register a shutdown event to write messages to flash
		Event::register('shutdown', 'Messages::shutdown', true);
	}

	public static function shutdown()
	{
		Session::set_flash('messages', static::$messages);
	}

	public static function danger($message)
	{
		static::add_message('danger', $message);
	}

	public static function info($message)
	{
		static::add_message('info', $message);
	}

	public static function warning($message)
	{
		static::add_message('warning', $message);
	}

	public static function success($message)
	{
		static::add_message('success', $message);
	}

	public static function has()
	{
		return count(static::$messages) > 0;
	}

	public static function flush()
	{
		static::$messages = [];
		Session::delete('messages');
	}

	public static function get()
	{
		return static::$messages;
	}

	protected static function add_message($type, $message)
	{
		if ( ! is_array($message))
		{
			$message = [$message];
		}

		foreach ($message as $msg)
		{
			// deal with validation errors passed as-is
			if ($msg instanceof Validation_Error)
			{
				$msg = $msg->get_message();
			}

			array_push(static::$messages, array(
				'type' => $type,
				'body' => $msg,
			));
		}
	}

}
