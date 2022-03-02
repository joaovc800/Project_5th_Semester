<?php
function generatePassword($qtyCaraceters = 8)
{
    //Letras min�sculas embaralhadas
    $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
 
    //Letras mai�sculas embaralhadas
    $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
 
    //N�meros aleat�rios
    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;
 
    //Caracteres Especiais
    $specialCharacters = str_shuffle('!@#$%*-');
 
    //Junta tudo
    $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;
 
    //Embaralha e pega apenas a quantidade de caracteres informada no par�metro
    $password = substr(str_shuffle($characters), 0, $qtyCaraceters);
 
    //Retorna a senha
    return $password;
}

function array_map_recursive($func, $array){

    $rArray = array();

    foreach ($array as $key => $value) {

        $rArray[$key] = is_array($value)

            ? array_map_recursive($func, $value)

            : $func($value); // or call_user_func($func, $value)

    }

    return $rArray;

}