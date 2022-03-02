<?php
session_start();
include("connect.php");
include("functions.php");

header("Content-type: application/json");

try {
    $aRetorno = array();

    $cQry = "SELECT RESET
                    FROM acessos 
                    WHERE ID_USUARIO = {$_SESSION['DADOS_USER']['ID_USUARIO']}";

    $fetchQuery = mysqli_query($conect,$cQry);
    $count = mysqli_num_rows($fetchQuery);

    if($count > 0){
        $dados = mysqli_fetch_assoc($fetchQuery);
        if($dados['RESET'] == "S"){
            $aRetorno['MSG'] = "Reset de senha disponivel";
            $aRetorno['RESET'] = "S";
        }else{
            $aRetorno['MSG'] = "Não tem reset de senha";
        }
    }
    
} catch (\Throwable $th) {
    $aRetorno['MSG'] = "Error!";
    $aRetorno['ERRO'] = true;
} finally {
    echo json_encode($aRetorno);
}

