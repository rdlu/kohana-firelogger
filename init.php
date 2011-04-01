<?php defined('SYSPATH') or die('No direct script access.');

// Load Firelogger
if ($path = Kohana::find_file('vendor', 'Firelogger/firelogger')) {
	ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.dirname(dirname($path)));
	require_once 'Firelogger/firelogger.php';
	Flog("Firelogger Loaded");
}