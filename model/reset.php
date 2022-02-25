<?php

include("connect.php");
include("functions.php");
header("Content-type: application/json");
try {
    $aRetorno = array();
    $json = json_decode(file_get_contents('php://input'));
    if(isset($json->reset_user)){
        session_start();
        if(empty($json->senha1) || empty($json->senha2)){
            $aRetorno['MSG'] = "Todas as senhas devem ser preenchidas igualmente";
            $aRetorno['ERRO'] = true;
        }else if($json->senha1 != $json->senha2){
            $aRetorno['MSG'] = "Senhas não correspondem, por favor digite novamente";
            $aRetorno['ERRO'] = true;
        }else{
            $cQryUpdate = "UPDATE acessos SET PASSWORD = MD5('{$json->senha2}'), RESET = 'N' WHERE ID_USUARIO = '{$_SESSION['DADOS_USER']['ID_USUARIO']}'";
            $exeQry = mysqli_query($conect,$cQryUpdate);
            if($exeQry > 0){
                $aRetorno['MSG'] = "Senha alterada com sucesso!";
                $aRetorno['ERRO'] = false;
            }
        }
    }else{
        if(empty($json->email) || empty($json->matricula)){
            $aRetorno['MSG'] = "Todos os campos devem ser preenchidos";
            $aRetorno['ERRO'] = true;
        }else{
            $cQry = "SELECT ID_USUARIO,
                        MATRICULA,
                        STATUS,
                        USERNAME 
                        FROM acessos 
                        WHERE USERNAME = '{$json->email}'
                        AND MATRICULA = '{$json->matricula}'";
    
            $fetchQuery = mysqli_query($conect,$cQry);
            $count = mysqli_num_rows($fetchQuery);
            if($count > 0){
                $senhaAlet = generatePassword();
                $cQryUpdate = "UPDATE acessos SET PASSWORD = MD5('{$senhaAlet}'), RESET = 'S' WHERE MATRICULA = '{$json->matricula}'";
                $exeQry = mysqli_query($conect,$cQryUpdate);
                if($exeQry > 0){
                    $aRetorno['MSG'] = "Senha alterada com sucesso!";
                    $aRetorno['ERRO'] = false;
                    $aRetorno['PASS'] = $senhaAlet;
                }
                
            }else{
                $aRetorno['MSG'] = "Usuário não encontrado";
                $aRetorno['ERRO'] = true;
            }
        }
    }
    
} catch (\Throwable $th) {
    $aRetorno['MSG'] = "Error!";
    $aRetorno['ERRO'] = true;
}

echo json_encode($aRetorno);
