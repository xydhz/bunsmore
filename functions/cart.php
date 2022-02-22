<?php
	session_start();

	//	establish connection
	$conn = new mysqli('localhost','root','','tinapay');

	// add to cart
	if (isset($_POST['cart'])){
		// variables
		$uid = $_SESSION['id'];
		$pr_id = $_SESSION['name'];
		$pr_price = $_SESSION['price'];
		$pr_quant = $_POST['quantity'];
		$pr_total = $pr_price * $pr_quant;
		$stat = 1;
		
		// execute query
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
				$stmt = $conn->prepare("insert into orders(uid,item,price,count,total,status) values(?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("ssssss",$uid,$pr_id,$pr_price,$pr_quant,$pr_total,$stat);
				$stmt->execute();
				$_SESSION['msg_item_add'] = "Item added to cart";
				header("Location: ../pages/products.php?echo=success");
				$stmt->close();
				$conn->close();
		}
	}

	if (isset($_POST['return'])){
		header("Location: ../pages/products.php?echo=return");
	}

?>