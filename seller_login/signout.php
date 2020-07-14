<?php session_start();
unset($_SESSION['sellername']);
header("Location:signin.php");
?>
