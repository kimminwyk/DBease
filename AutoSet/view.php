<?php 
if(isset($_GET['dbname'])){
	echo $_GET['dbname'];
}
else{
	echo "죄송합니다. 잘못된 오류가 발생했습니다.";
}
?>