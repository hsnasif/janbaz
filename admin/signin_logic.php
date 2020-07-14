<?php session_start();
$con=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die ("Connection Failed !!! ".mysqli_connect_error());
echo $adminid=$_POST['admin_id'];
$password=$_POST['Password'];
$sql="select * from admin where admin_id='$adminid' and Password='$password'";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
$row=mysqli_num_rows($result);
if($row)
{
echo $_SESSION['admin_name']=$adminid;
header("location:admin_pannel.php");
}
else
{
die("Unauthorise User");
}
?>