<?php

namespace App\Providers;

use Exception;

class View {

	public static function load($view_path, $view_name)
	{
		if (file_exists($view_path . $view_name))
		{
			return file_get_contents($view_path . $view_name);
		}
		throw new Exception("View does not exist: " . $view_path . $view_name);
	}

	public static function display($view_name)
	{
		$view_path = BASEPATH . '/../resources/views/';

		return self::load($view_path, $view_name);
	}
}