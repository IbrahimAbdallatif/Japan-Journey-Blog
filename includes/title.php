<?php 
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
if (strtolower($title) ==  'index') { 		// to enable case insensitivity
	$title = 'home';
}
$title = ucwords($title);