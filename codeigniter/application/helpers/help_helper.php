<?php

function select($select, $selected)
{
    if($select == $selected){
        return 'selected';
    }
}

function alert($content, $type){
    if($content) {
        echo "<div class='alert alert-".$type."'>";
        echo "<p>".$content."</p>";
        echo "</div>";
    };
}


//00/00/0000 -> 0000-00-00
function data_db($data)
{
    $data = explode("/", $data);
    return $data[2]. '-' .$data[1]. '-' .$data[0];
}

//0000-00-00 -> 00/00/0000
function data_normal($data)
{
    $data = explode("-", $data);
    return $data[2]. '/' .$data[1]. '/' .$data[0];
}

//0000-00-00 00:00:00 -> 00/00/0000 00:00:00
function datetime_normal($data)
{
    if($data == ''){
        return '';
    } else {
        $data = explode(' ', $data);
        $horas = $data[1];
        $data = explode("-", $data[0]);
        $data = $data[2]. '/' .$data[1]. '/' .$data[0] .' às: '. $horas;
        return $data;
    }
}

//0000-00-00 00:00:00 -> 00/00/0000
function datetime_normal_sem_hora($data)
{
    if($data == ''){
        return '';
    } else {
        $data = explode(' ', $data);
        $horas = $data[1];
        $data = explode("-", $data[0]);
        $data = $data[2]. '/' .$data[1]. '/' .$data[0];
        return $data;
    }
}

//0000-00-00 00:00:00 -> 00/00/0000 00:00:00
function datetime_db($data)
{
    $data = explode(' ', $data);
    $horas = $data[1];
    $data = explode("-", $data[0]);
    $data = $data[2]. '/' .$data[1]. '/' .$data[0] .' '. $horas;
    return $data;
}

function use_uri_segment($uri)
{
    return ucfirst(str_replace('-', ' ', $uri));
}

function pre($data = '')
{
    echo '<pre style="margin:5px; opacity:0.95; border-radius:0; box-shadow: 1px 3px 5px 1px #888888; background-color:#282828; color:#EF4136; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:#FF4B4B;">';
    print_r($data);
    echo '</pre>';
}


function to_url($segment)
{
    return str_replace(' ', '-', urldecode($segment));
}

function breadcrumb($segment)
{
    return ucfirst(str_replace('-', ' ', urldecode($segment)));
}

function usuario_url($segment)
{
    return ucfirst(str_replace('-', ' ', urldecode($segment)));
}

function criptografia($value){
    return hash('Whirlpool', $value);
}

function risco ($value){
    if ($value == 1) {
        echo "1 - NÃO AGUDO";
    }
    else if ($value == 2) {
        echo "2 - BAIXO RISCO";
    }
    else if ($value == 3) {
        echo "3 - MÉDIO RISCO";
    }
    else if ($value == 4) {
        echo "4 - ALTO RISCO";
    }
    else{
        echo "";
    }
}

function titleCase($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("de", "da", "dos", "das", "do", "I", "II", "III", "IV", "V", "VI", "UBS", "e", "PPI"))
    {
        /*
         * Exceptions in lower case are words you don't want converted
         * Exceptions all in upper case are any words you don't want converted to title case
         *   but should be converted to upper case, e.g.:
         *   king henry viii or king henry Viii should be King Henry VIII
         */
        $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
        foreach ($delimiters as $dlnr => $delimiter) {
            $words = explode($delimiter, $string);
            $newwords = array();
            foreach ($words as $wordnr => $word) {
                if (in_array(mb_strtoupper($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtoupper($word, "UTF-8");
                } elseif (in_array(mb_strtolower($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtolower($word, "UTF-8");
                } elseif (!in_array($word, $exceptions)) {
                    // convert to uppercase (non-utf8 only)
                    $word = ucfirst($word);
                }
                array_push($newwords, $word);
            }
            $string = join($delimiter, $newwords);
       }//foreach
       return $string;
    }


function valida_proximo_vencimento($aviso_qte_vencimento, $qte_dias_vencimento){
    if($aviso_qte_vencimento <= $qte_dias_vencimento){
        return true;
    }
    else{
        return false;
    }
}

function posicao_na_fila(array $fila, $tipo){
    if($tipo == 'procedimento')
    {
        $posicao = 1;
        $fila_paciente = [];
        foreach ($fila as $f) {
            $fila_paciente[] = [
                'posicao' => $posicao, 
                'protocolo' => $f['procedimento_protocolo'], 
                'procedimento' => $f['tabela_proced_id']
            ];
            $posicao++;
        }
        return $fila_paciente;
    }
    else if($tipo == 'exames')
    {
        $posicao = 1;
        $fila_paciente = [];
        foreach ($fila as $f) {
            $fila_paciente[] = [
                'posicao' => $posicao, 
                'protocolo' => $f['exames_protocolo'],
                'procedimento' => $f['tabela_exames_id']
            ];
            $posicao++;
        }
        return $fila_paciente;
    }        
    else if($tipo == 'tfd')
    {
        $posicao = 1;
        $fila_paciente = [];
        foreach ($fila as $f) {
            $fila_paciente[] = [
                'posicao' => $posicao, 
                'protocolo' => $f['tfd_protocolo']
            ];
            $posicao++;
        }
        return $fila_paciente;
    }
    else if ($tipo == 'cirurgia'){
        $posicao = 1;
        $fila_paciente = [];
        foreach ($fila as $f) {
            $fila_paciente[] = [
                'posicao' => $posicao, 
                'protocolo' => $f['cirurgia_protocolo'],
                'procedimento' => $f['tabela_cirurgias_id']
            ];
            $posicao++;
        }
        return $fila_paciente;
    }
}

function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
  }

function calcular_idade($data_nascimento) {
    $date1 = new DateTime($data_nascimento);
    $date2 = new DateTime(date('Y-m-d'));
    $interval = $date1->diff($date2);
    return $interval->y . " ANOS " . $interval->m." MESES ".$interval->d." DIAS "; 
}

function decimalparabanco($decimal)
{
    $decimal = str_replace(".", "", $decimal);
    $decimal = str_replace(",", ".", $decimal);
   return $decimal;
}

function array_flatten_iterator (array $array) {
    foreach ($array as $value) {
        if (is_array($value)) {
            yield from array_flatten_iterator($value);
        } else {
            yield $value;
        }
    }
}

function array_flatten (array $array) {
    return iterator_to_array(array_flatten_iterator($array), false);
}

function verifica_periodo(array $array){
    foreach ($array as $a)
    {
        $data = explode('-', $a['data']);
        $mes = $data[1];
        if ($mes == '01')
            $mes = 'Jan';
        else if ($mes == '02')
            $mes = 'Fev';
        else if ($mes == '03')
            $mes = 'Mar';
        else if ($mes == '04')
            $mes = 'Abr';
        else if ($mes == '05')
            $mes = 'Mai';
        else if ($mes == '06')
            $mes = 'Jun';
        else if ($mes == '07')
            $mes = 'Jul';
        else if ($mes == '08')
            $mes = 'Ago';
        else if ($mes == '09')
            $mes = 'Set';
        else if ($mes == '10')
            $mes = 'Out';
        else if ($mes == '11')
            $mes = 'Nov';
        else if ($mes == '12')
            $mes = 'Dez';
            
        $periodo[] = $mes;
    }
    return array_unique($periodo);
}

function extenso($value, $uppercase = 0): string
{
    if (strpos($value, ",") > 0) {
        $value = str_replace(".", "", $value);
        $value = str_replace(",", ".", $value);
    }
    $singular = ["centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão"];
    $plural = ["centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões"];
 
    $c = ["", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"];
    $d = ["", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];
    $d10 = ["dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove"];
    $u = ["", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"];
 
    $z = 0;
 
    $value = number_format($value, 2, ".", ".");
    $integer = explode(".", $value);
    $cont = count($integer);
    for ($i = 0; $i < $cont; $i++)
        for ($ii = strlen($integer[$i]); $ii < 3; $ii++)
            $integer[$i] = "0" . $integer[$i];
 
    $fim = $cont - ($integer[$cont - 1] > 0 ? 1 : 2);
    $rt = '';
    for ($i = 0; $i < $cont; $i++) {
        $value = $integer[$i];
        $rc = (($value > 100) && ($value < 200)) ? "cento" : $c[$value[0]];
        $rd = ($value[1] < 2) ? "" : $d[$value[1]];
        $ru = ($value > 0) ? (($value[1] == 1) ? $d10[$value[2]] : $u[$value[2]]) : "";
 
        $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd &&
                $ru) ? " e " : "") . $ru;
        $t = $cont - 1 - $i;
        $r .= $r ? " " . ($value > 1 ? $plural[$t] : $singular[$t]) : "";
        if ($value == "000"
        )
            $z++;
        elseif ($z > 0)
            $z--;
        if (($t == 1) && ($z > 0) && ($integer[0] > 0))
            $r .= ( ($z > 1) ? " de " : "") . $plural[$t];
        if ($r)
            $rt = $rt . ((($i > 0) && ($i <= $fim) &&
                    ($integer[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
    }
 
    if (!$uppercase) {
        return trim($rt ? $rt : "zero");
    } elseif ($uppercase == "2") {
        return trim(strtoupper($rt) ? strtoupper(strtoupper($rt)) : "Zero");
    } else {
        return trim(ucwords($rt) ? ucwords($rt) : "Zero");
    }
}

/**
 * @param string $usuario_nivel Nível do usuário logado
 * @param string $situacao fila, agendados, realizados ou cancelados
 * @param string $tipo cirurgias, exames ou procedimentos
 * @param string $usuario_municipio Código IBGE que o usuário logado pertence
 * @param string $usuario_ubs UBS que o usuário pertence
 * @return array
 */
function condicao_regulacao(string $usuario_nivel, string $situacao, string $tipo, ?string $usuario_municipio, ?string $usuario_ubs, ?int $usuario_estabelecimento_prestador): array {
    $status_fila = ['realizado' => '', 'data' => NULL, 'negado_por' => NULL];
    $status_agendado = ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL];
    $status_realizado = ['realizado' => 'sim'];
    $status_cancelado = ['negado_por !=' => NULL];
    $status_interno = ['tipo_solicitacao' => NULL];
    $status_externo = ['tipo_solicitacao !=' => NULL];
    $status_estabelecimento_prestador = ['estabelecimento_prestador' => $usuario_estabelecimento_prestador];



    // IDENTIFICA O STATUS DO PEDIDO
    switch ($situacao){
        case 'fila':
            $setStatus = $status_fila;
            break;
        case 'agendados':
            $setStatus = $status_agendado;
            break;
        case 'realizados':
            $setStatus = $status_realizado;
            break;
        case 'cancelados':
            $setStatus = $status_cancelado;
            break;
    }

    // IDENTIFICA O TIPO DO PEDIDO
    switch ($tipo){
        case 'cirurgias':
            $setTipo = ['cirurgia_usuario' => $usuario_municipio];
            break;
        case 'exames':
            $setTipo = ['exames_usuario' => $usuario_municipio];
            break;
        case 'procedimentos':
            $setTipo = ['procedimento_usuario' => $usuario_municipio];
            break;
    }

    // DEFINE OS FILTROS
    switch ($usuario_nivel) {
        case 'município':
            $where = array_merge($setStatus, $setTipo);
            break;
        case 'ubs':
            $where = array_merge($setStatus, ['estabelecimento_solicitante' => $usuario_ubs]);
            break;
        case 'regulação externa':
            $where = array_merge($setStatus, $status_externo);
            break;
        case 'regulação':
            $where = array_merge($setStatus, $status_interno);
            break;
        case 'estabelecimento prestador':
            $where = array_merge($setStatus, $status_estabelecimento_prestador);
            break;
        default:
            $where = $setStatus;
    }
    return $where;
}

function formataTelefone($number): string {
    // primeiro substr pega apenas o DDD e coloca dentro do (), segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
    return "(".substr($number,0,2).") ".substr($number,2,-4)."-".substr($number,-4);
}

function verificaEstado($codigo_uf): ?string {
    switch ($codigo_uf) {
        case 12:
            return 'Acre';
        case 27:
            return 'Alagoas';
        case 16:
            return 'Amapá';
        case 13:
            return 'Amazonas';
        case 29:
            return 'Bahia';
        case 23:
            return 'Ceará';
        case 53:
            return 'Distrito Federal';
        case 32:
            return 'Espírito Santo';
        case 52:
            return 'Goiás';
        case 21:
            return 'Maranhão';
        case 51:
            return 'Mato Grosso';
        case 50:
            return 'Mato Grosso do Sul';
        case 31:
            return 'Minas Gerais';
        case 15:
            return 'Pará';
        case 25:
            return 'Paraíba';
        case 41:
            return 'Paraná';
        case 26:
            return 'Pernambuco';
        case 22:
            return 'Piauí';
        case 24:
            return 'Rio Grande do Norte';
        case 43:
            return 'Rio Grande do Sul';
        case 33:
            return 'Rio de Janeiro';
        case 11:
            return 'Rondônia';
        case 14:
            return 'Roraima';
        case 42:
            return 'Santa Catarina';
        case 35:
            return 'São Paulo';
        case 28:
            return 'Sergipe';
        case 17:
            return 'Tocantins';
        default:
            return NULL;
    }
}

function geraConfExternaDb (array $listaCidadesInfosus) : array {
    $result = NULL;
    foreach ($listaCidadesInfosus as $config) {
        foreach ($config as $cidade => $c) {
            $result[$cidade] = [
                'dsn'	=> '',
                'hostname' => $c['hostname']. ':41890',
                'username' => $c['username'],
                'password' => DB_PASSWORD,
                'database' => $c['database'],
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
            ];
        }
    }
    return $result;
}



