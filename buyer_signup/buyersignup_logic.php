<?php
$con=mysqli_connect('localhost:3308','root','','ebook_management') 
or
die("Connection Failed !!!".mysqli_connection_error());
$bname=$_POST['Buyer_Name'];
$password=$_POST['Password'];
$mobile=$_POST['Mobile'];
$email=$_POST['email'];
$city=$_POST['City'];
$add=$_POST['Address'];
$file=$_FILES['buyerimages']['tmp_name'];
$name=$_FILES['buyerimages']['name'];
copy("$file","buyer_images/$name");
$sql="insert into buyer(Buyer_Name,Password,Mobile,email,City,Address,image)Values('$bname','$password','$mobile','$email','$city','$add','$name')";
$result=mysqli_query($con,$sql)
or 
die(mysqli_connect_error());
if($result)
{
echo ("Buyer Added Succesfully");
header("location:../index.php");
}
?>