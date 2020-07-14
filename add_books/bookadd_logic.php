<?php
$con=mysqli_connect('localhost:3308','root','','ebook_management') 
or
die("Connection Failed !!!".mysqli_connection_error());
$bookname=$_POST['bookname'];
$writername=$_POST['writername'];
$publishername=$_POST['publishername'];
$year=$_POST['year'];
$isbn=$_POST['isbnumber'];
$pages=$_POST['pages'];
$price=$_POST['price'];
$file=$_FILES['bookimages']['tmp_name'];
$name=$_FILES['bookimages']['name'];
copy("$file","book_images/$name");
$sql="insert into book(Book_Name,Writer_Name,Publisher_Name,Year_of_Publication,ISBN,Pages,Price,image)Values('$bookname','$writername','$publishername','$year','$isbn','$pages','$price','$name')";
$result=mysqli_query($con,$sql)
or 
die(mysqli_connect_error());
if($result)
{
echo ("Book Added Succesfully");
header("location:../admin/admin_pannel.php");
}
?>