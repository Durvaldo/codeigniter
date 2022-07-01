<?php
defined('BASEPATH') OR exit('No direct script access allowed');


defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);


defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);


defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');


defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code




#CONFIGURAÇÕES DO MÓDULO LABORATÓRIO
#VERIFICAR QUAL O ID/CÓDIGO NO BANCO DE DADOS E ATRIBUIR ÀS CONSTANTES

define('HEMOGRAMA_COMPLETO', '0202020380');
define('TAP', '0202020142');
define('URINA_ROTINA', '0202050017');
define('COLESTEROL', '0202000001');
define('PARASITOLOGICO', '0202000002');
define('COAGULOGRAMA', '0202000003');

define('VERSION', '2.7.3');

#CONFIGURAÇÕES DE ASSINATURA DE IMPRESSÃO
define('ASSINATURAS', false);

if ($_SERVER['SERVER_NAME'] == 'montezuma.infosus.net.br'){
    define('ASSINATURAS_DIGITALIZADAS', true);
} else {
    define('ASSINATURAS_DIGITALIZADAS', false);
}

if ($_SERVER['SERVER_NAME'] == 'montalvania.infosus.net.br'){
    define('CABECALHO_COMPLETO', false);
} else {
    define('CABECALHO_COMPLETO', true);
}

if ($_SERVER['SERVER_NAME'] == 'janauba.infosus.net.br' ||
    $_SERVER['SERVER_NAME'] == 'saofrancisco.infosus.net.br'){
    define('MICRORREGIONAL', true);
} else {
    define('MICRORREGIONAL', false);
}

if ($_SERVER['SERVER_NAME'] == 'matoverde.infosus.net.br'){
    define('PROFISSIONAL_CABECALHO', true);
} else {
    define('PROFISSIONAL_CABECALHO', false);
}

// BANCO DE DADOS
const DB_PASSWORD = 'l33tsupah4x0r';

// ************************** DESENVOLVIMENTO ****************************
const DEV_HOSTNAME = 'localhost';
const DEV_USERNAME = 'root';
const DEV_DATABASE = 'infosus';
const DEV_PASSWORD = '';

// **************************** HOMOLOGAÇÃO ******************************
const HOMOLOGACAO_HOSTNAME = 'mysql746.umbler.com';
const HOMOLOGACAO_USERNAME = 'homologacaoinfo';
const HOMOLOGACAO_DATABASE = 'homologacaoinfo';


// ***************************** PRODUÇÃO ********************************
// DEMONSTRAÇÃO
const DEMO_HOSTNAME = 'mysql743.umbler.com';
const DEMO_USERNAME = 'demo-infosus';
const DEMO_DATABASE = 'demo-infosus';

// VARGEM GRANDE
const VARGEM_GRANDE_HOSTNAME = 'mysql742.umbler.com';
const VARGEM_GRANDE_USERNAME = 'vargemgrande.inf';
const VARGEM_GRANDE_DATABASE = 'vargemgrande.inf';

// GRÃO MOGOL
const GRAO_MOGOL_HOSTNAME = 'mysql742.umbler.com';
const GRAO_MOGOL_USERNAME = 'graomogol';
const GRAO_MOGOL_DATABASE = 'graomogol';

// BOTUMIRIM
const BOTUMIRIM_HOSTNAME = 'mysql742.umbler.com';
const BOTUMIRIM_USERNAME = 'botumirim';
const BOTUMIRIM_DATABASE = 'botumirim';

// GAMELEIRAS
const GAMELEIRAS_HOSTNAME = 'mysql743.umbler.com';
const GAMELEIRAS_USERNAME = 'gameleiras';
const GAMELEIRAS_DATABASE = 'gameleiras';

// MONTALVÂNIA
const MONTALVANIA_HOSTNAME = 'mysql743.umbler.com';
const MONTALVANIA_USERNAME = 'montalvania';
const MONTALVANIA_DATABASE = 'montalvania';

// JUVENÍLIA
const JUVENILIA_HOSTNAME = 'mysql743.umbler.com';
const JUVENILIA_USERNAME = 'juvenilia';
const JUVENILIA_DATABASE = 'juvenilia';

// MATIAS CARDOSO
const MATIAS_CARDOSO_HOSTNAME = 'mysql743.umbler.com';
const MATIAS_CARDOSO_USERNAME = 'matias';
const MATIAS_CARDOSO_DATABASE = 'matias';

// MIRAVÂNIA
const MIRAVANIA_HOSTNAME = 'mysql743.umbler.com';
const MIRAVANIA_USERNAME = 'miravania';
const MIRAVANIA_DATABASE = 'miravania';

// MONTE AZUL
const MONTE_AZUL_HOSTNAME = 'mysql743.umbler.com';
const MONTE_AZUL_USERNAME = 'monteazul';
const MONTE_AZUL_DATABASE = 'monteazul';

// RIACHO DOS MACHADOS
const RIACHO_MACHADOS_HOSTNAME = 'mysql743.umbler.com';
const RIACHO_MACHADOS_USERNAME = 'riacho';
const RIACHO_MACHADOS_DATABASE = 'riacho';

// SÃO JOÃO DO PARAÍSO
const SAO_JOAO_PARAISO_HOSTNAME = 'mysql746.umbler.com';
const SAO_JOAO_PARAISO_USERNAME = 'sjparaiso';
const SAO_JOAO_PARAISO_DATABASE = 'sjparaiso';

// VERDELÂNDIA
const VERDELANDIA_HOSTNAME = 'mysql746.umbler.com';
const VERDELANDIA_USERNAME = 'verdelandia';
const VERDELANDIA_DATABASE = 'verdelandia';

// CATUTI
const CATUTI_HOSTNAME = 'mysql743.umbler.com';
const CATUTI_USERNAME = 'catuti';
const CATUTI_DATABASE = 'catuti';

// MAMONAS
const MAMONAS_HOSTNAME = 'mysql745.umbler.com';
const MAMONAS_USERNAME = 'mamonas';
const MAMONAS_DATABASE = 'mamonas';

// PORTEIRINHA
const PORTEIRINHA_HOSTNAME = 'mysql746.umbler.com';
const PORTEIRINHA_USERNAME = 'porteirinha';
const PORTEIRINHA_DATABASE = 'porteirinha';

// MATO VERDE
const MATO_VERDE_HOSTNAME = 'mysql746.umbler.com';
const MATO_VERDE_USERNAME = 'matoverde';
const MATO_VERDE_DATABASE = 'matoverde';

// MONTEZUMA
const MONTEZUMA_HOSTNAME = 'mysql746.umbler.com';
const MONTEZUMA_USERNAME = 'montezuma';
const MONTEZUMA_DATABASE = 'montezuma';

// SAO FRANCISCO
const SAO_FRANCISCO_HOSTNAME = 'mysql465.umbler.com';
const SAO_FRANCISCO_USERNAME = 'saofrancisco';
const SAO_FRANCISCO_DATABASE = 'saofrancisco';

// CRISTÁLIA
const CRISTALIA_HOSTNAME = 'mysql743.umbler.com';
const CRISTALIA_USERNAME = 'cristalia';
const CRISTALIA_DATABASE = 'cristalia';

// JANAÚBA
const JANAUBA_HOSTNAME = 'mysql745.umbler.com';
const JANAUBA_USERNAME = 'janauba';
const JANAUBA_DATABASE = 'janauba';



