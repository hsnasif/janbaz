<?php
$db=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die("connection failed".mysqli_connect_error());
$id=$_GET['id'];
$sql="update seller set status=1 where seller_id='$id'";
$result=mysqli_query($db, $sql) or die ("Error in query: $query. " . mysqli_connect_error());
        // print result
        echo 'Package is unblocked Successfully'; 
		echo '<br>';
		echo '<a href=package_management.php>Go back to the main menu</a>';
		?>
		