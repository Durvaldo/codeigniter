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
    'sms',
    'whatsapp',
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
    'Auth_model' => 'Auth',
    'Dashboard_model' => 'Dashboard',
    'Pacientes_model' => 'Pacientes',
    'Especialidades_model' => 'Especialidades',
    'CasaDeApoio_model' => 'Casa_de_apoio',
    'Procedimentos_model' => 'Procedimentos',
    'TabelaProced_model' => 'Tabela_proced',
    'TabelaCirurgias_model' => 'Tabela_cirurgias',
    'Exames_model' => 'Exames',
    'TabelaExames_model' => 'Tabela_exames',
    'Tfd_model' => 'Tfd',
    'Usuarios_model' => 'Usuarios',
    'Veiculos_model' => 'Veiculos',
    'Viagens_model' => 'Viagens',
    'Estabelecimentos_model' => 'Estabelecimentos',
    'Municipios_model' => 'Municipios',
    'Passageiros_model' => 'Passageiros',
    'Cotas_model' => 'Cotas',
    'Estoques_model' => 'Estoques',
    'Produtos_model' => 'Produtos',
    'PreProdutos_model' => 'PreProdutos',
    'Profissionais_model' => 'Profissionais',
    'Historico_almoxarifado_model' => 'Historico_almoxarifado',
    'Transferencias_model' => 'Transferencias',
    'Logs_model' => 'Logs',
    'Protocolos_model' => 'Protocolos',
    'Laboratorio_model' => 'Laboratorio',
    'Cirurgias_model' => 'Cirurgias',
    'Sistema_model' => 'Sistema',
    'Geral_model' => 'Geral',
    'Responsaveis_laboratorio_model' => 'Responsaveis_laboratorio',
    'Social_consultas_model' => 'Social_consultas',
    'Social_cirurgias_model' => 'Social_cirurgias',
    'Social_medicamentos_model' => 'Social_medicamentos',
    'Social_exames_model' => 'Social_exames',
    'Social_oxigenios_model' => 'Social_oxigenios',
    'Social_locacoes_model' => 'Social_locacoes',
    'Social_ajudas_model' => 'Social_ajudas',
    'Motoristas_model' => 'Motoristas',
    'Solicitacoes_transferencias_model' => 'Solicitacoes_transferencias',
    'Responsaveis_assistencia_social_model' => 'Responsaveis_assistencia_social',
    'Integration_model' => 'Integration'

);
