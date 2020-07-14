<?php
$con=mysqli_connect('localhost:3308','root','','ebook_management') 
or
die("Connection Failed !!!".mysqli_connection_error());
$sname=$_POST['Seller_Name'];
$password=$_POST['Password'];
$mobile=$_POST['Mobile'];
$email=$_POST['email'];
$city=$_POST['City'];
$add=$_POST['Address'];
$file=$_FILES['sellerimages']['tmp_name'];
$name=$_FILES['sellerimages']['name'];
copy("$file","seller_images/$name");
$sql="insert into seller(Seller_Name,Password,Mobile,email,City,Address,image)Values('$sname','$password','$mobile','$email','$city','$add','$name')";
$result=mysqli_query($con,$sql)
or 
die(mysqli_connect_error());
if($result)
{
echo ("Seller Added Succesfully");
header("location:../index.php");
}
?>