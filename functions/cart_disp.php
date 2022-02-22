<?php
	session_start();

  	if (empty($_SESSION['mail'])) {
      $_SESSION['msg_require_log'] = "You must be logged in first in order to access the page";
	    header("Location: ../pages/register.php?require=yes");
  	}

	$conn = new mysqli('localhost','root','','tinapay');
  
    $uid = $_SESSION['id'];
    $query = "SELECT * FROM orders WHERE uid= '$uid' AND status = 1";
    $result = filterTable($query);


    function filterTable($query){
      $conn = new mysqli('localhost','root','','tinapay');
      $filter_result = mysqli_query($conn, $query);
      return $filter_result;
    }

?>