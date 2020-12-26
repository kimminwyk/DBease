<?php 

include "../SessionConfig.php";
if( isset($_SESSION['db']) && isset($_SESSION['id']) && isset($_SESSION['pw']) ){
	require './main/index.html';
}
else
	header('Location: ../index.php');

?>