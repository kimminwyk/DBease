<?php 

error_reporting(0);

include("AllowConfig.php");

if( isset($_POST['DBid']) && isset($_POST['DBPassWord']) && isset($_POST['db']) && isset($_POST['Connect'])){
	/*
	DB List => MYSQL , MSSQL , Maridb
	=================

	MYSQL and Maridb => mysqli_connect();
	MSSQL => mssqli_connect();

	=================
	*/

	$db = $_POST['db'];
	$id = $_POST['DBid'];
	$pw = $_POST['DBPassWord'];
	$host = "localhost";

	if(empty($pw) && $Allow_Login_PassWord_Space){
		echo "Allow_Login_PassWord_Space 제약에 의해 패스워드 공백 로그인은 허용되지 않습니다.";
	}
	else{
		if( $db == "MYSQL" ){

			$MyConnect = mysqli_connect(
								$host,
								$id,
								$pw
							);
			
			if(!$MyConnect)
				echo "MYSQL 연결에 실패했습니다.";
			else{
				echo "MYSQL 연결 성공";
			}
	
	
		}else if( $db == "MSSQL"){
	
			$MyConnect = mssql_connect(
								$host,
								$id,
								$pw
							);

			if(!$MyConnect)
				echo "MSSQL 연결에 실패했습니다.";
			else{
				echo "MSSQL 연결 성공";
			}
	
		}else{
			echo "No DataBase";
		}
	}
}
else
	header("Location: ./");

?>