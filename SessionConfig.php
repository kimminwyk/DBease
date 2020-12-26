<?php 

	session_cache_expire(3600);
	
	session_start();
	
	function DbConnect($db,$id,$pw){
		$_SESSION['db'] = $db;
		$_SESSION['id'] = $id;
		$_SESSION['pw'] = $pw;
	}
	
?>