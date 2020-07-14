<?php
$db=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die("connection failed".mysqli_connect_error());
$id = $_GET['id'];
$query = "DELETE FROM seller WHERE seller_id = '$id'";
$result=mysqli_query($db, $query) or die ("Error in query: $query. " . mysqli_connect_error());
echo'One Row Is Deleted';
echo'<br>';
echo '<a href=package_management.php>Go back to the main menu</a>';
?>
