<?php
	session_start();
	if (empty($_SESSION['mail'])) {
    header("Location: ../pages/register.php");
	}

	if (empty($_SESSION['name'])) {
    header("Location: ../pages/products.php");
	}
?>