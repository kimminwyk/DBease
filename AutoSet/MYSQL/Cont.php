<?php 

$MySQLUserId = $_SESSION['id'];
$MySQLUserPw = $_SESSION['pw'];

$My = new mysqli("localhost",$MySQLUserId,$MySQLUserPw);

$My->set_charset("utf8");

?>