<?php
include("connect.php");
include("functions.php");
header("Content-type: application/json");
try {
    $aRetorno = array();
    $json = json_decode(file_get_contents('php://input'));

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
            $cQryUpdate = "UPDATE acessos SET PASSWORD = MD5('{$senhaAlet}') WHERE MATRICULA = '{$json->matricula}'";
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
    
} catch (\Throwable $th) {
    $aRetorno['MSG'] = "Error!";
    $aRetorno['ERRO'] = true;
}

echo json_encode($aRetorno);
