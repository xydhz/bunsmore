<?php
	session_start();
	if (empty($_SESSION['mail'])) {
	$_SESSION['msg_require_log'] = "You must be logged in first in order to access the page";
    header("Location: ../pages/register.php");
	}

	if (empty($_SESSION['name'])) {
    header("Location: ../pages/products.php");
	}
?>