<?php
session_start();
include("connect.php");
header("Content-type: application/json");
try {
    $aRetorno = array();
    $json = json_decode(file_get_contents('php://input'));

    $user = mysqli_real_escape_string($conect,$json->user); //proteger contra sql injection
    $password = mysqli_real_escape_string($conect,$json->password); //proteger contra sql injection

    $cQry = "SELECT ID_USUARIO,
                    MATRICULA,
                    STATUS,
                    USERNAME 
                    FROM acessos 
                    WHERE PASSWORD = MD5('{$password}')
                    AND USERNAME = '{$user}'";

    $fetchQuery = mysqli_query($conect,$cQry);
    $count = mysqli_num_rows($fetchQuery);

    if($count > 0){   
        while ($ret = mysqli_fetch_assoc($fetchQuery)) {
            $aRetorno['DADOS'] = $ret;
            $aRetorno['MSG'] = "success";
            $aRetorno['ERRO'] = false;
            $_SESSION['DADOS_USER'] = $ret;
        }
        $aRetorno['REDIRECT'] = "view/home.php";
    }else{
        $aRetorno['MSG'] = "Login inválido, por favor verifique seus dados.";
        $aRetorno['ERRO'] = true;
    }
    
} catch (\Throwable $th) {
    $aRetorno['MSG'] = "Error!";
    $aRetorno['ERRO'] = true;
}

echo json_encode($aRetorno);
