<?php session_start();
unset($_SESSION['buyername']);
header("Location:signin.php");
?>
