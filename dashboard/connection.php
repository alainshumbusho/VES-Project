<?php
	$connection=mysqli_connect('localhost','root','','vvs');
	if ($connection) {
		// echo "
		// 	<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
		// 		<strong>Database,</strong> is successful connected.
		// 	</div>
		// ";
	}
	if (!$connection) {

		echo "
			<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
				<strong>Database!</strong> Sorry they was a problem in database.
			</div>
		";
	}
?>