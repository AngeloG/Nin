<?php

// Configurable parameters (pass array to nf_begin() to merge this)
$nf_cfg = array(
	// Paths to places
	'paths' => array(
		'base' => '/',
		'controllers' => 'controllers',
		'views' => 'views',
		'models' => 'models',
		'components' => 'components',
		'i18n' => 'i18n',
		'validators' => 'validators',
		'assets' => 'assets',
		'logs' => 'logs',
	),

	// Routing configuration
	'routing' => array(
		'preferRules' => true,
		'rules' => array()
	),

	// Index pages
	'index' => array(
		'controller' => 'index',
		'action' => 'index'
	),

	// Validation
	'validation' => array(
		'regex_controllers' => '/^[a-z0-9\\-_]+$/',
		'regex_actions' => '/^[a-z0-9_]+$/',
		'parameters_exclusive' => true,
	),

	// Database information
	'db' => array(
		'class' => 'Dummy',
		'options' => array(),
	),

	// Error hooking (TODO: Move this to regular hooks)
	'error' => array(
		'hook' => false
	),

	// Hooks
	'hooks' => array(),

	// Internationalization
	'i18n' => array(
		'languages' => array('en-US'),
		'language' => 'en-US'
	),

	// Debugging
	'debug' => array(
		'enabled' => true,
	),

	// Additional parameters
	'params' => array()
);
// End of configurable parameters

// Runtime paths to framework and content
$nf_dir = '';
$nf_www_dir = '';
$nf_uri = '';
$nf_uri_fallback = false;
$nf_module = '';
$nf_current_controllername = '';

// Include dependencies
include('functions/define.php');
include('functions/autoloader.php');
include('functions/assets.php');
include('functions/begin.php');
include('functions/error.php');
include('functions/routing.php');
include('functions/hook.php');
include('functions/i18n.php');
include('functions/param.php');
include('functions/db.php');
include('functions/common.php');

function nf_begin($dir, $options = array())
{
	global $nf_dir;
	$nf_dir = __DIR__;
	nf_begin_internal($dir, $options);
}
