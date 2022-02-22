<?php
	session_start();

	//	establish connection
	$conn = new mysqli('localhost','root','','tinapay');

	// registration
	if (isset($_POST['register'])){
		// variables
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mail = $_POST['mail'];
		$pass = md5($_POST['pass']);
		$mnum = $_POST['mnum'];
		
		// execute query
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$mail_val = "SELECT * FROM accounts WHERE mail = '$mail'";
			$res = mysqli_query($conn, $mail_val);
			if ($res->num_rows > 0) {
				$_SESSION['msg_register'] = "That e-mail address is already in use, please enter a new one";
				header("Location: ../pages/register.php?state=repeat");
			} else {
				$stmt = $conn->prepare("insert into accounts(fname,lname,mail,pass,mnum)
					values(?, ?, ?, ?, ?)");
				$stmt->bind_param("sssss",$fname,$lname,$mail,$pass,$mnum);
				$stmt->execute();
				$_SESSION['mail'] = $mail;
				header("Location: success_dir.php");
				$stmt->close();
				$conn->close();
			}
		}
		
	}


	// login
	if (isset($_POST['login'])){
		// variables
		$mail = $_POST['mail'];
		$pass = md5($_POST['pass']);
		$comm = "SELECT * FROM accounts WHERE mail = '$mail' and pass = '$pass'";
		
		// login query
			$res = mysqli_query($conn, $comm);
			if ($res->num_rows > 0) {
				$row = mysqli_fetch_assoc($res);
				$_SESSION['id'] = $row['id'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['mail'] = $row['mail'];
				$_SESSION['mnum'] = $row['mnum'];
				header("Location: ../pages/index.php?state=success");
			} else {
				$_SESSION['msg_login'] = "Wrong e-mail address/password";
				header("Location: ../pages/register.php?state=mismatch");
			}
		}
		
	// inquire
	if (isset($_POST['query'])){
		// variables
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mail = $_POST['mail'];
		$msg = $_POST['msg'];
		
		// execute query
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
				$stmt = $conn->prepare("insert into query(fname,lname,mail,msg)
					values(?, ?, ?, ?)");
				$stmt->bind_param("ssss",$fname,$lname,$mail,$msg);
				$stmt->execute();
				$_SESSION['msg_contact'] = "Inquiry successfully sent";
				header("Location: ../pages/contact.php?query=success");
				$stmt->close();
				$conn->close();
		}
	}
		
?>