<?php
  session_start();
  if (!empty($_SESSION['mail'])) {
    header("Location: ../pages/index.php");
  }
?>