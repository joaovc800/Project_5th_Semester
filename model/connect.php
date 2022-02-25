<?php
<<<<<<< HEAD
$hostname =  $_ENV['URL'];
$username =  $_ENV['USERDB'];
=======
$hostname = $_ENV['URL'];
$username = $_ENV['USERDB'];
>>>>>>> 2ca319a67c17b61860b67c635eb8bf2c69316d73
$password =  $_ENV['PASS'];
$db =  $_ENV['DB'];
$conect = mysqli_connect($hostname,$username,$password,$db) or die ("não conectou");
