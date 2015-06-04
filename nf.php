<?php

// Configurable parameters (pass array to nf_begin() to merge this)
$nf_cfg = array(
	// Paths to places
	'paths' => array(
		'base' => '/',
		'controllers' => 'controllers',
		'views' => 'views',
		'models' => 'models'
	),
	
	// Validation regexes
	'validation' => array(
		'regex_controllers' => '/^[a-z0-9\\-_]+$/',
		'regex_actions' => '/^[a-z0-9_]+$/'
	),
	
	// SQL information
	'sql' => array(
		'enabled' => false,
		'hostname' => 'localhost',
		'username' => '',
		'password' => '',
		'database' => ''
	)
);
// End of configurable parameters

// Runtime paths to framework and content
$nf_dir = '';
$nf_www_dir = '';

// Runtime SQL variables
$nf_sql = false;

// Include dependencies
include('nf_functions.php');
include('classes/controller.php');
include('classes/model.php');
