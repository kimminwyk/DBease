<?php include "Cont.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		.Lable-DB{
			font-size: 15px;
		}
		.ul-Table{
			display: none;
		}
	</style>
</head>
<body>
<?php 
$Inform = $My->query("SELECT DISTINCT table_schema FROM information_schema.tables");

while($res = mysqli_fetch_assoc($Inform)){

?>
	<label class="Lable-DB"><?php echo $res['table_schema']; ?><br>
		<ul class="ul-Table">
	<?php 
		$InformTable = $My->query("SELECT DISTINCT table_name FROM information_schema.tables WHERE table_schema='".$res['table_schema']."'");

		while($rest = mysqli_fetch_assoc($InformTable)){
	?>
		<li class="li-Table"><?php echo $rest['table_name']; ?></li><br>
	<?php
	}
	?>
	</ul><br>
	</label>
	<?php

}

?>
<script type="text/javascript">
	$(".Lable-DB").click(function(){
		if($(this).find(".ul-Table").css("display") == "none"){
			$(".ul-Table").css("display","none");
			$(this).find(".ul-Table").css("display","inline-block");
		}
		else{
			$(this).find(".ul-Table").css("display","none");
		}
	});
</script>
</body>
</html>