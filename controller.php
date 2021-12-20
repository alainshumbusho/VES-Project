<?php 
	session_start();
	include('connection.php');
	if (isset($_POST['signup_form'])) {	
		$first_name = $_POST['first_name']; 
		$last_name = $_POST['last_name']; 
		$dateofbirth = $_POST['dateofbirth']; 
		$address = $_POST['address']; 
		$phonenumber = $_POST['phonenumber']; 
		$national_id = $_POST['national_id']; 
		$email = $_POST['email']; 
		$password = $_POST['password']; 
		$insert_user = $connection->query("INSERT INTO `users`(`firstName`, `lastName`, `email`, `dateofbirth`, `address`, `phonenumber`,`national_id`, `password`, `role`) VALUES ('$first_name','$last_name','$email','$dateofbirth','$address','$phonenumber','$national_id','$password','client')");
		if ($insert_user) {
			echo "<script>alert('Thanks for joining VVS community, you account has been successfully created.')</script>";
          	echo "<script>window.location.href='signin.php';</script>";
			// echo "
			// 	<div class='alert alert-info' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
			// 		<strong>successful,</strong> added position.
			// 	</div>
			// ";
		}else{
			echo "<script>alert('Sorry, we were unable to create the account please try again ...')</script>";
			// echo "
			// 	<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
			// 		<strong>Sorry,</strong> we were unable to add position.
			// 	</div>
			// ";

		}
	}
	if (isset($_POST['signin_form'])) {	
		$email = $_POST['email']; 
		$password = $_POST['password']; 
		$user_credentials = $connection->query("SELECT * FROM users WHERE email='$email'");
		// $user_credentials = $connection->query("SELECT * FROM users WHERE email LIKE '%$email%'");
		$user_check = mysqli_num_rows($user_credentials);
		if ($user_check > 0) {
			$user_credentials = $connection->query("SELECT * FROM users WHERE email='$email' AND password = '$password'");
			$user_data = mysqli_fetch_array($user_credentials);
			$check = mysqli_num_rows($user_credentials);
			if ($check > 0) {
				$_SESSION["user_id"] = $user_data['id'];
				$_SESSION["user_first_name"] = $user_data['firstName'];
				$_SESSION["user_last_name"] = $user_data['lastName'];
				$_SESSION["user_email"] = $user_data['email'];
				$_SESSION["dateofbirth"] = $user_data['dateofbirth'];
				$_SESSION["address"] = $user_data['address'];
				$_SESSION["phonenumber"] = $user_data['phonenumber'];
				$_SESSION["national_id"] = $user_data['national_id'];
				$_SESSION["user_password"] = $user_data['password'];
				$_SESSION["user_role"] = $user_data['role'];
				if ($user_data['role'] != 'admin') {
					echo '<script>
						let text = "Thanks for sign in the VVS community, Would you like to proceed to your account.";
		  				if (confirm(text) == true) {
		    				window.location.href="account.php";
		  				} else {
		    				window.location.href="vote.php";
		  				}
						</script>
					';
				}else{
					echo '<script>
						let text = "Thanks for sign as the administrator, Would you like to proceed to your account.";
		  				if (confirm(text) == true) {
		    				window.location.href="dashboard/dashboard.php";
		  				} else {
		    				window.location.href="logout.php";
		  				}
						</script>
					';

				}
	          	// echo "<script>window.location.href='account.php';</script>";
			}else{
				echo "<script>alert('Sorry, we were unable to sign you in. Please check your credentials and try again ...')</script>";
	          	// echo "<script>window.location.href='signup.php';</script>";

			}
		}
		else{
			echo "<script>alert('Sorry, we were unable to sign you in. Please create an account ...')</script>";
          	echo "<script>window.location.href='signup.php';</script>";
		}
		

	}
	if (isset($_POST['update_account'])) {	
		$user_id = $_POST['user_id']; 
		$first_name = $_POST['first_name']; 
		$last_name = $_POST['last_name']; 
		$address = $_POST['address']; 
		$phonenumber = $_POST['phonenumber']; 
		$email = $_POST['email']; 
		$password = $_POST['password']; 
		$update_user = $connection->query("UPDATE `users` SET firstName='$first_name', lastName='$last_name',address='$address',phonenumber='$phonenumber', email='$email', password='$password' WHERE id='$user_id'");
		if ($update_user) {
			$_SESSION["user_id"] = $user_id;
			$_SESSION["user_first_name"] = $first_name;
			$_SESSION["user_last_name"] = $last_name;
			$_SESSION["address"] = $address;
			$_SESSION["phonenumber"] = $phonenumber;
			$_SESSION["user_email"] = $email;
			$_SESSION["user_password"] = $password;
			$_SESSION["user_role"] = 'client';
			echo "<script>alert('Your information has been successfully been updated.')</script>";
          	echo "<script>window.location.href='account.php';</script>";
			// echo "
			// 	<div class='alert alert-info' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
			// 		<strong>successful,</strong> added position.
			// 	</div>
			// ";
		}else{
			echo "<script>alert('Sorry, we were unable to update the account information please try again ...')</script>";
			// echo "
			// 	<div class='alert alert-danger' style='margin-top: 30px;width: 50%;margin-left: 40%;'>
			// 		<strong>Sorry,</strong> we were unable to add position.
			// 	</div>
			// ";

		}
	}
	if (isset($_POST['get_candidates'])) {	
		$selected_position = $_POST['selected_position'];
		$get_all_candidates = $connection->query("SELECT * FROM candidates WHERE candidate_position = '$selected_position'");
		echo '
                <select class="form-control" id="position_candidates" name="position_candidates" required="">
                    <option value="">Select candidate</option>
            ';
            while ($candidate = mysqli_fetch_array($get_all_candidates)) {
                echo '
                    <option value="'.$candidate['id'].'">'.$candidate['candidate_name'].'</option>
                ';
            }
       echo '</select>';

	}
	if (isset($_POST['vote_candidate'])) {	
		if (!isset($_SESSION['user_id'])) {
			echo '<script>
				let text = "Please proceed with the login before you make a vote, would you like to login.";
					if (confirm(text) == true) {
						window.location.href="signin.php";
					} else {
						window.location.href="vote.php";
					}
				</script>
			';
		}else{
			$user_id = $_SESSION['user_id'];
			$position = $_POST['position'];
			$position_candidate = $_POST['position_candidates'];
			$check_first_vote = $connection->query("SELECT * FROM votes WHERE position_id = '$position' AND user_id = '$user_id'");
			$counter = mysqli_num_rows($check_first_vote);
			if ($counter > 0) {
				echo '<script>
					let text = "You are unable to place an other vote on this position, you can only vote once on certain position.";
						if (confirm(text) == true) {
							window.location.href="vote.php";
						} else {
							window.location.href="vote.php";
						}
					</script>
				';
			}else{
				$send_vote = $connection->query("INSERT INTO `votes`(`position_id`, `candidate_it`, `user_id`, `vote`) VALUES ('$position','$position_candidate','$user_id','1')");
				if ($send_vote) {
					echo '<script>
						let text = "We have successfully registred your vote would you like to proceed with other position.";
							if (confirm(text) == true) {
								window.location.href="vote.php";
							} else {
								window.location.href="index.php";
							}
						</script>
					';
				}else{
					echo "<script>alert('Sorry, we were unable to send your vote. Please try again later ...')</script>";

				}
			}

		}
		
	}
?>