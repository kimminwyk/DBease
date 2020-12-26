<?php 
include("SessionConfig.php");
if(isset($_SESSION['id']) && isset($_SESSION['db']) && isset($_SESSION['pw'])){
	header('Location: ./AutoSet/');
}
require 'templates/index.html';
?>