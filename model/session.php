<?php
session_start();
if(!$_SESSION['USER']){
    header("Location: index.php");
    exit();
}
