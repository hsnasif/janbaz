<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
GYM Admin Pannel</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<body bgcolor="#66CCFF">
<p  align="center" class="style5">&nbsp;</p>
<?php 
$user = $_SESSION['name']; 
$con=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die("connection failed".mysqli_connect_error());
$sql="select Admin_Name from admin where Admin_Name='$user'";
$result=mysqli_query($con,$sql);
while($getname=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
<?php } ?>

<p  align="center" class="style5">&nbsp;</p>
<p  align="center" class="style5">&nbsp;</p>
<h2> <u>
<p  align="center" class="style8 style1"> Add News </p>
</u> </h2>
<form method="post" action="book.php" name="addbookform" enctype="multipart/form-data">
<table align="center">
<tr>
  <td width="100" class="style7 style1">News Topic </td>
  <td width="200" ><input type="text" name="name"  /></td></tr>
<tr>
  <td class="style7 style1">News</td>
  <td><textarea name="trainings"  cols="22" rows="10"/>
</textarea></td></tr>
<tr>
  <td><span class="style7 style1">Date</span></td>
   <td>
<input type="date" id="date" name="Date"></td>
</tr>

<tr><td colspan="2" align="center"><input name="submit" type="submit" value="Add News" /></td></tr>
<tr><td colspan="2" align="center"><a href="seller_pannel.php">Go Back to Seller Pannel</a></td></tr>

</table>
</form>

</body>
</html>