<?php
include("connect.php");

try {
    $aRetorno = array();
    // Takes raw data from the request
$json = json_decode(file_get_contents('php://input'));
$aRetorno['DADOS'] = $json;
// Converts it into a PHP object
    //$aRetorno['DADOS'] = json_decode(file_get_contents('input://php'));
    //$aRetorno['DADOS'] = json_encode(file_get_contents('input://php'));

    
} catch (\Throwable $th) {
    //throw $th;
}

echo json_encode($aRetorno);