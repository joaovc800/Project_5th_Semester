<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "db";
$conect = mysqli_connect($hostname,$username,$password,$db) or die ("não conectou");

/* $cQuery = "SELECT * FROM funcionarios";

$fetchQuery = mysqli_query($conect,$cQuery);
$cont = mysqli_num_rows($fetchQuery);
if($cont > 0){
    $aRetorno = mysqli_fetch_assoc($fetchQuery);
    print_r($aRetorno);
    for ($i=0; $i < $cont; $i++) { 
        print_r($fetchQuery[$i]);
    }
}

echo json_encode($aRetorno); */