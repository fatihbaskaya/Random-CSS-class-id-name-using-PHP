<!DOCTYPE html>
<html>
<head>
	<title>Random Class with PHP at CSS</title>
</head>
<body>
	
	<?php 
	$length = 10;
	$randomClass = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	?>


	<style>
		.<?php echo $randomClass?>{
			background: #fece1a;
			width:200px;
			height: 200px;
			text-align: center;
			line-height: 200px;
			border-radius:50%;
			font-weight: bold;
			margin:0 auto;
		}
	</style>


	<div class="<?php echo $randomClass;?>">
		Fatih Baskaya
	</div>
</body>
</html>
