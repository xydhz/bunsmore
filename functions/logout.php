<?php
	session_start();
	unset ($_SESSION["id"]);
	unset ($_SESSION["fname"]);
	unset ($_SESSION["lname"]);
	unset ($_SESSION["mail"]);
	unset ($_SESSION["mnum"]);
	header("Location: ../pages/index.php")

?>