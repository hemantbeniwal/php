
<?php

if (isset($_SESSION["success"])) { ?>
	<div class="alert alert-success">
		<?php echo $_SESSION["success"];
		unset($_SESSION["success"]);
		?>
	</div>
	<?php } ?>

	<?php if (isset($_SESSION["error"])) { ?>
	<div  class="alert alert-danger">
		<?php
		echo $_SESSION["error"];
		unset($_SESSION["error"]);
		?>
	</div>
	<?php } ?>
	<!-- <style>
		.success {
			width: 50%;
			padding: 5px 10px;
			background-color: aqua;
			border: 1px salmon;
			margin: 20px 10px;
		}
	
		.error {
			width: 50%;
			padding: 5px 10px;
			background-color: crimson;
			border: 1px darkred;
			margin: 20px 10px;
		}
	</style> -->