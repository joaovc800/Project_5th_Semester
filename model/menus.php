<?php
session_start();
include("connect.php");
header("Content-type: application/json");
$aRetorno = array();
try {
    $cQryMenu = "SELECT ID_MENU,
                        DESCRICAO AS DESCR,
                        ICON            
                   FROM menu";

    //print_r($cQryMenu);
    $fetchQueryMenu = mysqli_query($conect,$cQryMenu);
    $countMenu = mysqli_num_rows($fetchQueryMenu);

    if($countMenu > 0){   
        for($i = 0; $i < $countMenu; $i++){  
            $aRetorno['MENU'][$i] = mysqli_fetch_assoc($fetchQueryMenu);
            $aRetorno['MSG'] = "Success";
            $aRetorno['ERRO'] = false;
        }
    }else{
        $aRetorno['MSG'] = "Error, nÃ£o retornou dados";
        $aRetorno['ERRO'] = true;
    }

    $cQrySubmenu = "SELECT menu.ID_MENU,
                        submenu.ID_SUBMENU,
                        submenu.DESCRICAO AS DESCSUBMENU,
                        submenu.LINK
                   FROM menu,
                        submenu
                  WHERE menu.ID_MENU = submenu.ID_MENU";

    //print_r($cQryMenu);
    $fetchQuery = mysqli_query($conect,$cQrySubmenu);
    $count = mysqli_num_rows($fetchQuery);

    if($count > 0){   
        for($i = 0; $i < $count; $i++){  
            $dados[$i] = mysqli_fetch_assoc($fetchQuery);
            $aRetorno['SUBMENU'][$dados[$i]['ID_MENU']][$i] = $dados[$i];
            $aRetorno['MSG'] = "Success";
            $aRetorno['ERRO'] = false;
        }
    }else{
        $aRetorno['MSG'] = "Error, nÃ£o retornou dados";
        $aRetorno['ERRO'] = true;
    }

} catch (\Throwable $th) {
    $aRetorno['ERRO'] = true;
    $aRetorno['MSG'] = "Error!";
}

echo json_encode($aRetorno);