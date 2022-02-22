<?php

	session_start();
	
	$conn = new mysqli('localhost','root','','tinapay');

	if (isset($_POST['delete'])) {

		$id = $_POST['hiders'];

	    $query = "DELETE FROM orders WHERE id=$id";
       	$conn->query($query);
        $conn->close();
        $_SESSION['msg_delete'] = "Item deleted from cart";
        header("Location: ../pages/cart.php?delete=success");

	}

?>