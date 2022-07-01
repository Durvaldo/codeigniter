<?php
defined('BASEPATH') or exit('No direct script access allowed');

$query_builder = TRUE;
$active_group = 'codeigniter';

//configurações de banco de dados

$db['codeigniter'] = array(
	'dsn'	   => '',
	'hostname' => localhost,
	'username' => root,
	'password' => '',
	'database' => 'codeigniter',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

