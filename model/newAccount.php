<?php
session_start();
include("connect.php");

try {
    $aRetorno = array(); // Utilizado para checagem de erros
    $json = json_decode(file_get_contents('php://input')); // processar json para objeto

    // verificar campos vázios
    if( empty($json->username) || empty($json->password)){
        throw new Exception('Dados vazios');// Lançar um erro com os dados caso não tenha sido digitado alguma info
    }

    // Preparar os dados
    $matricula = str_shuffle('0123456789'); // Atribuir um numero rand baseada no array
    $status = substr(str_shuffle('ABCDE'),0,1); // Atribuir uma letra rand entre A -- E
    // Dados recebidos do javascript
    $username = mysqli_escape_string($conect,$json->username);
    $password = mysqli_escape_string($conect,$json->password);
    
    // criar a query
    $query = "INSERT INTO acessos (MATRICULA, STATUS, USERNAME, PASSWORD) VALUES ('{$matricula}','{$status}','{$username}', '{$password}')";
    
    if($conect->query($query) === TRUE){
        $aRetorno['MSG'] = "Criada conta sucesso.";
        $aRetorno['ERRO'] = false;

    } else {
        throw new Exception("Conexão falhou");
    }

} catch (Exception $err) {  
    $aRetorno['MSG'] = "Erro ao criar conta: ".$err->getMessage();
    $aRetorno['ERRO'] = true;
} finally {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($aRetorno);
}



