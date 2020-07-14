<?php
$con=mysqli_connect('localhost:3308','root','','ebook_management') 
or
die("Connection Failed !!!".mysqli_connection_error());
$newstopic=$_POST['news_topic'];
$news=$_POST['news'];
$date=$_POST['date'];
$sql="update news set News_Topic='$newstopic',News_Details='$news',Date='$date' where news_id=1";
$result=mysqli_query($con,$sql)
or 
die(mysqli_connect_error());
if($result)
{
echo ("News Added Succesfully");
header("location:../admin/admin_pannel");
}
?>