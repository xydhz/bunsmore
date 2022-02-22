<?php

session_start();

$conn = new mysqli('localhost','root','','tinapay');

if (isset($_POST['checkout'])){

	$uid = $_SESSION['id'];
	$check = "SELECT * FROM orders WHERE uid = '$uid'";
    $res_check = mysqli_query($conn,$check);

    if ($res_check->num_rows > 0) {
        $query = "UPDATE orders SET status = '2' WHERE uid = '$uid'";
        $conn->query($query);
        $conn->close();
        $_SESSION['msg_check_success'] = "Your orders are now being processed, please wait until they are delivered";
        header("Location: ../pages/cart.php?checkout=success");
    }
}

?>