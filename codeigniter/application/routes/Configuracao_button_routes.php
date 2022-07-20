<?php

$route['admin/configuracao']['get'] = 'admin/configuracao/Configuracao_controller/index';
// $route['admin/configuracao/adicionar']['get'] = 'admin/configuracao/Configuracao_controller/adicionar';
$route['admin/configuracao/adicionar']['post'] = 'admin/configuracao/Configuracao_controller/new';
$route['admin/configuracao/adicionar/icone']['post'] = 'admin/configuracao/Configuracao_controller/newIcon';
$route['admin/configuracao/adicionar/filtro']['post'] = 'admin/configuracao/Configuracao_controller/newFilter';
// $route['admin/configuracao/editar/(:num)']['get'] = 'admin/configuracao/Configuracao_controller/openEdit/$1';
$route['admin/configuracao/editar']['post'] = 'admin/configuracao/Configuracao_controller/edit';
$route['admin/configuracao/deletar/(:num)']['get'] = 'admin/configuracao/Configuracao_controller/delete/$1';
$route['admin/configuracao/switch/(:num)']['get'] = 'admin/configuracao/Configuracao_controller/switch/$1';
