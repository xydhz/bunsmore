<?php
	session_start();
	
	$conn = new mysqli('localhost','root','','tinapay');
	
	// item fetch to display
	if (isset($_POST['value'])) {
		$value = $_POST['value'];
		$_SESSION['item_id'] = $value;
		
		$query = "SELECT name, price, description, dir FROM items WHERE id = $value";
		$result = mysqli_query ($conn, $query);
		
		foreach($result as $row) {
			$_SESSION['name'] = $row['name'];
			$_SESSION['price'] = $row['price'];
			$_SESSION['description'] = $row['description'];
			$_SESSION['image_dir'] = $row['dir'];
		}
		
		header("Location: ../pages/item.php");
	}
	
?>