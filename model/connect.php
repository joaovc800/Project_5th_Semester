<?php
$hostname =  $_ENV['URL'];//"localhost";//
$username = $_ENV['USERDB'];//"root"; //
$password =  $_ENV['PASS'];//""; //
$db =  $_ENV['DB'];//"db"; //
$conect = mysqli_connect($hostname,$username,$password,$db) or die ("não conectou");
