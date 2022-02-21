<?php
	session_start();

	$conn = new mysqli('localhost','root','','tinapay');

	$mail = $_SESSION['mail'];
	
	$comm = "SELECT * FROM accounts WHERE mail = '$mail'";
		
		// login query
			$res = mysqli_query($conn, $comm);
			if ($res->num_rows > 0) {
				$row = mysqli_fetch_assoc($res);
				$_SESSION['id'] = $row['id'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['mnum'] = $row['mnum'];
				header("Location: ../pages/success.php");
			}

?>