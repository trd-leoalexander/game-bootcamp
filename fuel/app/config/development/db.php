<?php
/**
* The development database settings. These get merged with the global settings.
*/
return array(
	'default' => array(
		'type' => 'mysqli',
		'connection' => array(
			'hostname'	   => 'localhost',
			'port'		   => '3306',
			'database'	   => 'game-bootcamp',
			'username'	   => 'root',
			'password'	   => '',
			'persistent'	=> false,
			'compress'	   => false,
		),
		'identifier'	 => '`',
		'table_prefix'   => '',
		'charset'		=> 'utf8',
		'enable_cache'   => true,
		'profiling'	  => false,
		'readonly'	   => false,
	),
	'shared' => array(
		'type' => 'mysqli',
		'connection' => array(
			'hostname'	   => 'localhost',
			'port'		   => '3306',
			'database'	   => 'shared_database',
			'username'	   => 'root',
			'password'	   => '',
			'persistent'	 => false,
			'compress'	   => false,
		),
		'identifier'	 => '`',
		'table_prefix'   => '',
		'charset'		=> 'utf8',
		'enable_cache'   => true,
		'profiling'	  => false,
		'readonly'	   => false,
	),
);
