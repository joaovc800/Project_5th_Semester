<?php
session_start();
include("connect.php");
header("Content-type: application/json");
try {
    $aRetorno = array();
    $json = json_decode(file_get_contents('php://input'));

    $cQry = "SELECT ID,
                    MATRICULA,
                    STATUS,
                    USER 
                    FROM acessos 
                    WHERE PASSWORD = MD5('{$json->password}')
                    AND USER = '{$json->user}'";

    $fetchQuery = mysqli_query($conect,$cQry);
    $count = mysqli_num_rows($fetchQuery);

    if($count > 0){   
        while ($ret = mysqli_fetch_assoc($fetchQuery)) {
            $aRetorno['DADOS'] = $ret;
            $aRetorno['MSG'] = "success";
            $aRetorno['ERRO'] = false;
        }
        $_SESSION['USER'] = $aRetorno['DADOS']['MATRICULA'];
        $_SESSION['USER'] = $aRetorno['DADOS']['STATUS'];
        $_SESSION['USER'] = $aRetorno['DADOS']['USER'];

        $aRetorno['REDIRECT'] = "view/painel.php";
    }else{
        $aRetorno['MSG'] = "Login inválido, por favor verifique seus dados";
        $aRetorno['ERRO'] = true;
    }

    
} catch (\Throwable $th) {
    $aRetorno['MSG'] = "Error!";
    $aRetorno['ERRO'] = true;
}

echo json_encode($aRetorno);