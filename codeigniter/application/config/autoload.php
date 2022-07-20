<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array(
    'session',
    'email',
    'database',
    'upload',
    'user_agent',
    'ui',
    'upload',
);


$autoload['drivers'] = array();


$autoload['helper'] = array(
    'url', 
    'help', 
    'string', 
    'download', 
    'cookie', 
    'time', 
    'uri', 
    'help'
);


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array(
    'Configuracao_model' => 'Configuracao',
    'Icone_button_model' => 'Icone_button',
    'Filtro_button_model' => 'Filtro_button'
);
