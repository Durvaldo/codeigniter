<?php

$route['v2/almoxarifado/dashboard']['get'] = 'v2/almoxarifado/Dashboard_controller/index';

$route['v2/almoxarifado/retirada-agrupada']['get'] = 'v2/almoxarifado/Retirada_agrupada_controller/index';
$route['v2/almoxarifado/retirada-agrupada/add-list']['post'] = 'v2/almoxarifado/Retirada_agrupada_controller/addList';
$route['v2/almoxarifado/retirada-agrupada/edit-list']['post'] = 'v2/almoxarifado/Retirada_agrupada_controller/editList';
$route['v2/almoxarifado/retirada-agrupada/remove-list/(:num)']['get'] = 'v2/almoxarifado/Retirada_agrupada_controller/removeList/$1';
$route['v2/almoxarifado/retirada-agrupada/concluir']['get'] = 'v2/almoxarifado/Retirada_agrupada_controller/concluir';

$route['v2/almoxarifado/estoque/novo']['post'] = 'v2/almoxarifado/Estoques_controller/novo_estoque';
$route['v2/almoxarifado/estoque/(:num)']['get'] = 'v2/almoxarifado/Estoques_controller/index/$1';
$route['v2/almoxarifado/estoque/(:num)/lotes/(:num)']['get'] = 'v2/almoxarifado/Lotes_controller/index/$1/$2';
$route['v2/almoxarifado/receber-estoque']['get'] = 'v2/almoxarifado/RecebeEstoque_controller/index';



$route['v2/almoxarifado/historico']['get'] = 'v2/almoxarifado/Historico_controller/index';

///
$route['v2/almoxarifado/produtos']['get'] = 'v2/almoxarifado/Produtos_controller/index';
$route['v2/almoxarifado/produtos/novo']['post'] = 'v2/almoxarifado/Produtos_controller/novo';
$route['v2/almoxarifado/produtos/retirar']['post'] = 'v2/almoxarifado/Produtos_controller/retirar';
$route['v2/almoxarifado/produtos/motivo-retirada']['post'] = 'v2/almoxarifado/Produtos_controller/add_motivo_retirada';
$route['v2/almoxarifado/produtos/fornecedor']['post'] = 'v2/almoxarifado/Produtos_controller/add_fornecedor';
$route['v2/almoxarifado/produtos/repor']['post'] = 'v2/almoxarifado/Produtos_controller/repor';
$route['v2/almoxarifado/produtos/novo']['post'] = 'v2/almoxarifado/Produtos_controller/novo';
$route['v2/almoxarifado/produtos/transferir']['post'] = 'v2/almoxarifado/Produtos_controller/transferir';
$route['v2/almoxarifado/produtos/solicitar-transferencia']['post'] = 'v2/almoxarifado/Produtos_controller/solicitar_transferencia';
$route['v2/almoxarifado/produtos/receber']['post'] = 'v2/almoxarifado/Produtos_controller/receber';
$route['v2/almoxarifado/transferencia/autoriza-recebimento']['post'] = 'v2/almoxarifado/Produtos_controller/autoriza_recebimento';
$route['v2/almoxarifado/transferencia/negar-transferencia']['post'] = 'v2/almoxarifado/Produtos_controller/negar_transferencia';


$route['v2/almoxarifado/pre-produtos']['get'] = 'v2/almoxarifado/PreProdutos_controller/index';
$route['v2/almoxarifado/pre-produtos/novo']['post'] = 'v2/almoxarifado/PreProdutos_controller/novo';
$route['v2/almoxarifado/pre-produtos/editar']['post'] = 'v2/almoxarifado/PreProdutos_controller/editar';


