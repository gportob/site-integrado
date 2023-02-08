<?php
function getCompleteDate($data)
{
    $partes = explode("-", $data);
    $dia = $partes[2];
    $mes = $partes[1];
    $ano = $partes[0];
    switch ($mes) {
        case 1:
            $nameM = "Jan";
            break;
        case 2:
            $nameM = "Fev";
            break;
        case 3:
            $nameM = "Mar";
            break;
        case 4:
            $nameM = "Abr";
            break;
        case 5:
            $nameM = "Mai";
            break;
        case 6:
            $nameM = "Jun";
            break;
        case 7:
            $nameM = "Jul";
            break;
        case 8:
            $nameM = "Ago";
            break;
        case 9:
            $nameM = "Set";
            break;
        case 10:
            $nameM = "Out";
            break;
        case 11:
            $nameM = "Nov";
            break;
        case 12:
            $nameM = "Dez";
            break;
    }
    $retorna = $dia . "<br>" . $nameM;
    return $retorna;
}

function converteReais($valor){

    if (strstr(Valor, ",")) {
        $v1 = explode(",", $rstValor);
        $rstValor = "$v1[0].$v1[1]";
        return $rstValor;
    } else {
        $v1 = substr($valor, 0, 3);
        $v2 = substr($valor, -2);
        $endValor = "R$ ".$v1.",".$v2;
        return "$endValor";
    }
}

function getReais($valor){
    $valor = $valor * 0.01;
    $valor = number_format($valor, 2, ',', '.');
    return "R$ ".$valor;
}

function converteData($data){
    if (strstr($data, "/")){//verifica se tem a barra /
        $d = explode ("/", $data);//tira a barra
        $rstData = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
        return $rstData;
    }
    else if(strstr($data, "-")){
        $data = substr($data, 0, 10);
        $d = explode ("-", $data);
        $rstData = "$d[2]/$d[1]/$d[0]";
        return $rstData;
    }
    else{
        return '';
    }
}

function onlyNumbers($str) {
    return preg_replace("/[^0-9]/", "", $str);
}

function mask($val, $mask)
{
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
        if ($mask[$i] == '#') {
            if (isset($val[$k]))
                $maskared .= $val[$k++];
        } else {
            if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}

function valCpf($cpf){
    return True;
    /*$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
    // Valida tamanho
    if (strlen($cpf) != 11)
        return false;
    // Calcula e confere primeiro dígito verificador
    for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
        $soma += $cpf{$i} * $j;
    $resto = $soma % 11;
    if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
        return false;
    // Calcula e confere segundo dígito verificador
    for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
        $soma += $cpf{$i} * $j;
    $resto = $soma % 11;
    return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);*/
}

########## Funções de Validação
function valString($str){
    $str = str_replace(array("'","\\"),"",$str);

    return $str;
}

function getMonthName($month){
    switch($month){
        case 1: $nameM = "Janeiro"; break;
        case 2: $nameM = "Fevereiro"; break;
        case 3: $nameM = "Março"; break;
        case 4: $nameM = "Abril"; break;
        case 5: $nameM = "Maio"; break;
        case 6: $nameM = "Junho"; break;
        case 7: $nameM = "Jullho"; break;
        case 8: $nameM = "Agosto"; break;
        case 9: $nameM = "Setembro"; break;
        case 10: $nameM = "Outubro"; break;
        case 11: $nameM = "Novembro"; break;
        case 12: $nameM = "Dezembro"; break;
    }
    return $nameM;
}

function getCompleteDate2($data){
    $partes = explode("-", $data);
    $dia = $partes[2];
    $mes = $partes[1];
    $ano = $partes[0];
    switch($mes){
        case 1: $nameM = "Janeiro"; break;
        case 2: $nameM = "Fevereiro"; break;
        case 3: $nameM = "Março"; break;
        case 4: $nameM = "Abril"; break;
        case 5: $nameM = "Maio"; break;
        case 6: $nameM = "Junho"; break;
        case 7: $nameM = "Jullho"; break;
        case 8: $nameM = "Agosto"; break;
        case 9: $nameM = "Setembro"; break;
        case 10: $nameM = "Outubro"; break;
        case 11: $nameM = "Novembro"; break;
        case 12: $nameM = "Dezembro"; break;
    }
    $retorna = $dia." de ".$nameM." de ".$ano;
    return $retorna;
}