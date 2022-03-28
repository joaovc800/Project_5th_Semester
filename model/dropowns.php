<?php
session_start();
include("connect.php");
include("functions.php");
header("Content-type: application/json");
$aRetorno = array();
try {
    $cQryMenu = "SELECT item FROM localizacao";
    $cQryMenu2 = "SELECT item FROM ativos";

    $fetchQueryMenu = mysqli_query($conect,$cQryMenu); // 1 query : dropdown
    $fetchQueryMenu2 = mysqli_query($conect,$cQryMenu2); // 2 query : tipo
    $countMenu = mysqli_num_rows($fetchQueryMenu);
    $countMenu2 = mysqli_num_rows($fetchQueryMenu2);

    if($countMenu > 0){   
        for($i = 0; $i < $countMenu; $i++){  
            $aRetorno['LOCALIZACAO'][$i] = mysqli_fetch_assoc($fetchQueryMenu);
        }
    } else {
        throw new Exception("Error, não retornou dados");
    }

    if ($countMenu2 > 0) {
        for($i = 0; $i < $countMenu2; $i++){  
            $aRetorno['TIPO_ATIVO'][$i] = mysqli_fetch_assoc($fetchQueryMenu2); 
        }
    } else {
        throw new Exception("Error, não retornou dados");
    }
    // tudo deu certo
    $aRetorno['MSG'] = "Success";
    $aRetorno['ERRO'] = false;

} catch (Exception $err) {  
    $aRetorno['MSG'] = "Erro no dropdown ".$err->getMessage();
    $aRetorno['ERRO'] = true;
} finally {
    $aRetorno = array_map_recursive('utf8_encode',$aRetorno);
    echo json_encode($aRetorno);
}

