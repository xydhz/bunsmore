<?php
	session_start();

	//	establish connection
	$conn = new mysqli('localhost','root','','tinapay');

	// add to cart
	if (isset($_POST['cart'])){
		// variables
		$uid = $_SESSION['id'];
		$pr_id = $_SESSION['item_id'];
		$pr_price = $_SESSION['price'];
		$pr_quant = $_POST['quantity'];
		
		// execute query
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
				$stmt = $conn->prepare("insert into orders(uid,itemid,price,count) values(?, ?, ?, ?)");
				$stmt->bind_param("isss",$uid,$pr_id,$pr_price,$pr_quant);
				$stmt->execute();
				echo "Added to cart";
				$stmt->close();
				$conn->close();
		}
	}

?>