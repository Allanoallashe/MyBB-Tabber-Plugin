<?php
// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.");
}

$plugins->add_hook('showthread_start', 'add_tabs');

function tabber_info()
{
	return array(
		"name"			=> "Tabber Plugin",
		"description"	=> "Add tab support to posts",
		"website"		=> "https://github.com/lukas-pgm",
		"author"		=> "Lukas Poggemann",
		"authorsite"	=> "https://github.com/lukas-pgm",
		"version"		=> "1.0",
		"compatibility" => "*"
	);
}

function tabber_install()
{
	global $db;

	rebuild_settings();
}

function tabber_uninstall()
{
	global $db;

	rebuild_settings();
}

function add_tabs()
{
	global $headerinclude;
	$headerinclude .= '<script type="text/javascript" src="'.$mybb->settings['bburl'].'/inc/plugins/tabber/tabber.js"></script>';
	$headerinclude .= '<link rel="stylesheet" href="'.$mybb->settings['bburl'].'/inc/plugins/tabber/tabber.css" type="text/css" media="screen">';
	$headerinclude .= '<style type="text/css">.tabber{display:none;}</style>';
}

?>
