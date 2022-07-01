<?php

function time_difference($datetime2)
{
    $datatime1 = new DateTime(date('Y-m-d H:i:s'));
    $datatime2 = new DateTime($datetime2);

    $data1  = $datatime1->format('Y-m-d H:i:s');
    $data2  = $datatime2->format('Y-m-d H:i:s');

    $resultado = $datatime1->diff($datatime2);

    if($resultado->y > 0){
        if($resultado->y > 1){
            return 'Há '. $resultado->y .' anos';
        } else {
            return 'Há '. $resultado->y .' ano.';
        }
        die();
    }
    if($resultado->m > 0){
        if($resultado->m > 1){
            return 'Há '. $resultado->m .' meses';
        } else {
            return 'Há '. $resultado->m .' mes.';
        }
        die();
    }
    if($resultado->d > 0){
        if($resultado->d > 1){
            return 'Há '. $resultado->d .' dias';
        } else {
            return 'Há '. $resultado->d .' dia.';
        }
        die();
    }
    if($resultado->h > 0){
        if($resultado->h > 1){
            return 'Há '. $resultado->h .' horas';
        } else {
            return 'Há '. $resultado->h .' hora.';
        }
        die();
    }
    if($resultado->i > 0){
        if($resultado->i > 1){
            return 'Há '. $resultado->i .' minutos';
        } else {
            return 'Há '. $resultado->i .' minuto.';
        }
        die();
    }
    if($resultado->s > 0){
        if($resultado->s > 1){
            return 'Há '. $resultado->s .' segundos';
        } else {
            return 'Há '. $resultado->s .' segundo.';
        }
        die();
    }

    return 'Agora mesmo.';
}


function welcome()
{
    $user = titleCase($_SESSION['usuario_nome']);
    if(date('H') < 11 && date('H') >= 4){
        return '<b style="color: #2c7be5">Bom dia, '.$user.'!</b>';
    } elseif (date('H') >= 11 && date('H') < 19) {
        return '<b style="color: #2c7be5">Boa tarde, '.$user.'!</b>';
    } else {
        return '<b style="color: #2c7be5">Boa noite, '.$user.'!</b>';
    }
}

function validade($validade_produto)
{
    $diferenca = strtotime($validade_produto) - strtotime(date('Y-m-d'));
    $dias = floor($diferenca / (60 * 60 * 24)); 
    return $dias;
}

//Função que retorna a Expectativa de Prazo de Atendimento do paciente atualizada conforme o tempo vai passando
function epa($epa, $data_solicitacao)
{
    $diferenca = strtotime($data_solicitacao) - strtotime(date('Y-m-d'));
    $dias = floor($diferenca / (60 * 60 * 24)); 
    return $epa + $dias;
}

 ?>
