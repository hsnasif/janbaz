<?php session_start();
$con=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die ("Connection Failed !!! ".mysqli_connect_error());
$buyermail=$_POST['buyeremail'];
$password=$_POST['Password'];
$sql="select * from buyer where email='$buyermail' and Password='$password'";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
$row=mysqli_num_rows($result);
if($row)
{
echo $_SESSION['buyeremail'];
header("location:buyer_pannel.php");
}
else
{
die("Unauthorise User");
}
?>