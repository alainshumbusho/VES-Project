<?php 
	session_start();
	include('connection.php');
	if (!isset($_SESSION['user_id'])) {
		echo "<script>window.location.href='../signin.php';</script>";
	}
	if (isset($_POST['add_position'])) {	
		$position_name = $_POST['postion_name']; 
		$insert_position = $connection->query("INSERT INTO `position`(`name`) VALUES ('$position_name')");
		if ($insert_position) {
			// echo "<script>alert('Successful, added position.')</script>";
			echo "
				<div class='alert alert-info' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
					<strong>successful,</strong> added position.
				</div>
			";
		}else{
			// print_r($insert_position->errorInfo());
			echo "
				<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
					<strong>Sorry,</strong> we were unable to add position.
				</div>
			";

		}
	}
	if (isset($_POST['add_candidate'])) {	
		$candidate_name = $_POST['candidate_name']; 
		$position_id = $_POST['position_id']; 
		$position_name = $_POST['position_name']; 
		$add_candidate = $connection->query("INSERT INTO `candidates`(`candidate_name`,`candidate_position`,`candidate_position_name`) VALUES ('$candidate_name','$position_id','$position_name')");
		if ($add_candidate) {
			// echo "<script>alert('Successful, added position.')</script>";
			echo "
				<div class='alert alert-info' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
					<strong>Candidate has been successful,</strong> added.
				</div>
			";
		}else{
			// print_r($insert_position->errorInfo());
			echo "
				<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
					<strong>Sorry,</strong> we were unable to add the candidate please try again.
				</div>
			";

		}
	}
?>