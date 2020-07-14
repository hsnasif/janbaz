<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

.content {
  background-color: #ddd;
  padding: 10px;
}


.footer {
  background-color: #003300;
  padding: 5px;
  font-size:9px;
}

input[type=text] {
  width: 150px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: #CCCCCC;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
}

</style>
</head>

<body>

<div class="topnav"> 
  <a href="index.php">Back to Home</a>	
<font size="+4" style="font-family;color:#339900"> <u> List of Your Search Results </u> </font>
  <hr>
  <hr>
  <hr>
  <br/></div>
<div class="content">
<?php 
$con=@mysqli_connect('localhost:3308','root','','ebook_management')
or 
die ("Connection Failed !!! ".mysqli_connect_error());
//$jname=$_POST['bookname'];
$sql="select * from book";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
while($row=mysqli_fetch_array($result)){?>
<table align="center">
<tr><td colspan="2" align="center"><img src="<?php echo "Signup/janbaz_signup/janbaz_images/".$row['image'];?>" width="250" height="150" border="3" /></td></tr>
<tr><td bgcolor="#CCCCCC">Janbaz User ID:</td><td bgcolor="#CCCCCC"><?php echo $row['janbaz_id'];?> </td> </tr>
<tr><td bgcolor="#CCCCCC">Janbaz Name:</td><td bgcolor="#CCCCCC"><?php echo $row['Janbaz_Name'];?> </td> </tr>
<tr><td bgcolor="#CCCCCC">Qualification:</td><td bgcolor="#CCCCCC"><?php echo $row['Qualification'];?> </td></tr>
<tr><td bgcolor="#CCCCCC">Other Qualification:</td><td bgcolor="#CCCCCC"><?php echo $row['Other_Qualification'];?> </td></tr>
<tr><td bgcolor="#CCCCCC">Age:</td><td bgcolor="#CCCCCC"><?php echo $row['Age'];?> </td></tr>
<tr><td bgcolor="#CCCCCC">Mobile Number 1:</td><td bgcolor="#CCCCCC"><?php echo $row['Mobile_Number_1'];?> </td></tr>
<tr><td bgcolor="#CCCCCC">Mobile Number 2:</td><td bgcolor="#CCCCCC"><?php echo $row['Mobile_Number_2'];?> </td></tr>
<tr><td bgcolor="#CCCCCC">City:</td><td bgcolor="#CCCCCC"><?php echo $row['City'];?></td>?> </td></tr>
</table>
<hr size="3" color="#006600" />
<?php }?>
</div>
<div class="footer">
  <p> 
  <font color="#669966">This Website is Devaloped By HSN-Soft_Solutions</font>
  </p>
  <p>  
</div>
</body>
</html>
