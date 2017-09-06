<?php

if (isset($_POST['submit'])) {

	include("dbh.php");

	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if(empty($first) || empty($last) || empty($email) || empty($username) || empty($pwd)) {
		header("Location: ../add_user.php?user=empty");
		exit();

	} else {
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../add_user.php?user=invalid");
			exit();

		} else {
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../add_user.php?user=email");
				exit();

			} else {
				//Check if username is already in database
				$sql = "SELECT * FROM users WHERE user_uid='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0) {
					header("location: ../add_user.php?user=usertaken");
					exit();

				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$username', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("location: ../users.php?user=success");
					exit();
				}
			}
		}

	 }

} else {
	header("Location: ../add_user.php");
	exit();
}