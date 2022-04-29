<?php
session_start();
include("connect.php");
include("functions.php");
header('Content-Type: application/json; charset=utf-8;Access-Control-Allow-Origin: *');
try {
    $query = 'SELECT 	inventario.CODIGO_PRODUTO as codigo,
                inventario.NOTA_FISCAL as nota,
                ativos.ITEM as ativo,
                inventario.NUM_SERIAL as serial,
                localizacao.ITEM as localizacao
            FROM inventario, ativos, localizacao, acessos
            WHERE	inventario.TIPO_ATIVO = ativos.ID
            AND inventario.LOCALIZACAO = localizacao.ID
            GROUP BY inventario.CODIGO_PRODUTO';

    // Caso a query contenha `localizacao.ITEM, acessos.ID_USUARIO` no group by
    // Todos os items vão aparecer na lista, não seria por causa que a localizacao e id_usuario não sao baseados na session? ai pega todos?
    
    $fetchQuery = mysqli_query($conect, $query);
    $count = mysqli_num_rows($fetchQuery);
   
    if($count > 0){
        $i;
        while ($ret = mysqli_fetch_assoc($fetchQuery)) {
            $i += 1;
            $aRetorno['DADOS'][] = $ret;
            $aRetorno['TOTAL'] += $ret['quantidade'];
            $aRetorno['MSG'] = "Success";
            $aRetorno['ERRO'] = false;
        }
        date_default_timezone_set('America/Sao_Paulo');
        $aRetorno['DIA'] = date('d/m/Y H:i');
    }else {
        throw new Exception("Busca não retornou dados.");
    }


} catch (\Exception $err) {
    $aRetorno['MSG'] = 'Erro: '.$err -> getMessage() || 'erro não especificado';
    $aRetorno['ERRO'] = true;
} finally {
    $aRetorno = array_map_recursive('utf8_encode',$aRetorno);
    echo json_encode($aRetorno);
}
