<?php
session_start();
include("connect.php");

try {
    $aRetorno = array(); // Utilizado para checagem de erros
    // Recebe um OBJETO, não um ARRAY!!
    $json = json_decode(file_get_contents('php://input')); // processar json para objeto
    
    // preparar dia da postagem
    date_default_timezone_set('America/Sao_Paulo');
    $dia = strftime('%Y-%m-%d', strtotime('today')); 

    // verificar campos vázios
    if(empty($json->c_produto)) {
        throw new Exception('Codigo de Produto vazio');// Lançar um erro com os dados caso não tenha sido digitado alguma info
    } else if ( empty($json->t_ativo) ) {
        throw new Exception('Tipo de ativo vazio');
    } else if ( empty($json->n_fiscal) ) {
        throw new Exception('Nota fiscal vazia');
    } else if ( empty($json->n_serial) ) {
        throw new Exception('Numero serial vazio');
    } else if ( empty($json->localizacao) ) {
        throw new Exception('Localizacao vazia');
    } else if ( empty($json->descricao) ) {
        throw new Exception('Descricao vazia');
    }


    // dados
    $c_produto = mysqli_escape_string($conect,$json->c_produto); // CODIGO
    $t_ativo = mysqli_escape_string($conect,$json->t_ativo);
    $descricao = mysqli_escape_string($conect,$json->descricao);
    $n_fiscal = mysqli_escape_string($conect,$json->n_fiscal);
    $n_serial = mysqli_escape_string($conect,$json->n_serial);
    $localizacao = mysqli_escape_string($conect,$json->localizacao);
    $date = $dia;

    // Por o ID conter + de uma forma de verificar, checamos todas ou senão retornamos para um número fixo
    if ( !empty($_SESSION['DADOS_USER']['ID_USUARIO']) ) {
        $id_usuario = $_SESSION['DADOS_USER']['ID_USUARIO'];
    } else if ( empty($json->id_usuario) ) {
        $id_usuario = 55; // o ID vira o id extra para outras chamadas (de varios sendo adicionados por exemplo, arquivos JSON)
    } else {
        $id_usuario = mysqli_escape_string($conect,$json->id_usuario); // Apenas para post automatizados
    }

    // criar a query
    $query = "INSERT INTO inventario (CODIGO_PRODUTO, TIPO_ATIVO, DESCRICAO, NOTA_FISCAL, NUM_SERIAL, LOCALIZACAO, DATA, ID_USUARIO) VALUES ('{$c_produto}',{$t_ativo},'{$descricao}',{$n_fiscal},'{$n_serial}', {$localizacao}, '{$date}', {$id_usuario})";
    
    // roda a query e retorna se funcionou ou nao
    if($conect->query($query) === TRUE){
        $aRetorno['MSG'] = "Item criado com sucesso";
        $aRetorno['ERRO'] = false;
    } else {
        throw new Exception("Erro ao execultar query");
    }
} catch (Exception $err) {  
    $aRetorno['MSG'] = "Erro ao adicionar: ".$err->getMessage();
    $aRetorno['ERRO'] = true;
} finally {
    header('Content-Type: application/json; charset=utf-8;Access-Control-Allow-Origin: *');
    echo json_encode($aRetorno);
}



