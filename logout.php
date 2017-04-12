<?php
 session_start();
 if (!isset($_SESSION['register'])) {
  header("Location: locationlocationlogin1.php");
 } else if(isset($_SESSION['register'])!="") {
  header("Location: locationlocationlogin1.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: login.php");
  exit;
 }
 ?>