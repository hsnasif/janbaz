<?php session_start();
$con=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die ("Connection Failed !!! ".mysqli_connect_error());
$sellermail=$_POST['selleremail'];
$password=$_POST['Password'];
$sql="select * from seller where email='$sellermail' and Password='$password'";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
$row=mysqli_num_rows($result);
if($row)
{
echo $_SESSION['selleremail']=$sellermail;
header("location:seller_pannel.php");
}
else
{
die("Unauthorise User");
}
?>