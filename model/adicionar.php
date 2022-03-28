<?php
session_start();
include("connect.php");

try {
    $aRetorno = array(); // Utilizado para checagem de erros
    $json = json_decode(file_get_contents('php://input')); // processar json para objeto
    date_default_timezone_set('America/Sao_Paulo');
    $dia = strftime('%d/%m/%Y', strtotime('today'));
    // verificar campos vázios
    if( empty($json->ativo) || empty($json->n_fiscal) || empty($json->n_serial) || empty($json->localizacao) || empty($json->descricao)){
        throw new Exception('Dados vazios');// Lançar um erro com os dados caso não tenha sido digitado alguma info
    }

    $item = mysqli_escape_string($conect,$json->item);
    $descricao = mysqli_escape_string($conect,$json->descricao);
    $n_fiscal = mysqli_escape_string($conect,$json->n_fiscal);
    $n_serial = mysqli_escape_string($conect,$json->n_serial);
    $localizacao = mysqli_escape_string($conect,$json->localizacao);
    $date = $dia;
    $id_usuario = $_SESSION['DADOS_USER']['ID_USUARIO'];
    // criar a query
    $query = "INSERT INTO inventario (ATIVOS, NOTA_FISCAL, NUM_SERIAL, LOCALIZACAO, DATA, ID_USUARIO) VALUES ('{$ativo}','{$n_fiscal}','{$n_serial}', MD5('{$localizacao}', MD5('{$descricao}'))";
    
    if($conect->query($query) === TRUE){
        $aRetorno['MSG'] = "Item criado com sucesso";
        $aRetorno['ERRO'] = false;
    } else {
        throw new Exception("Conexão falhou");
    }
} catch (Exception $err) {  
    $aRetorno['MSG'] = "Erro ao adicionar ".$err->getMessage();
    $aRetorno['ERRO'] = true;
} finally {
    header('Content-Type: application/json; charset=utf-8;Access-Control-Allow-Origin: *');
    echo json_encode($aRetorno);
}



