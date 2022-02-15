<?php
session_start();
if(!$_SESSION['DADOS_USER']){
    header("Location: ../index.php");
    exit();
}
