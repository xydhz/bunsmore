<?php
	session_start();

	$_SESSION['checkout_stat'] = 1;

    header("Location: ../pages/checkout.php");
?>