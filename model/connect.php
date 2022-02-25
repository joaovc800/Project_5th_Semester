<?php
$hostname =  $_ENV['URL'];
$username =  $_ENV['USERDB'];
$password =  $_ENV['PASS'];
$db =  $_ENV['DB'];
$conect = mysqli_connect($hostname,$username,$password,$db) or die ("não conectou");
