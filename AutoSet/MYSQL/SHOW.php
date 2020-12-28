<?php include "Cont.php"; ?>
<style type="text/css">
	.Lable-DB{
		font-size: 15px;
		vertical-align: middle;
	}
	.ul-Table{
		display: inline-block;
	}
	.xi-sets{
		vertical-align: middle;
	}
</style>
<?php 
$Inform = $My->query("SELECT DISTINCT table_schema FROM information_schema.tables");

while($res = mysqli_fetch_assoc($Inform)){

?>
	<div class="DB-Box-Views">
		<i class="xi-plus-min xi-sets"></i>
		<label class="Lable-DB"><?php echo $res['table_schema']; ?></label>
		<br>
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
	</div>
	<?php

}

?>