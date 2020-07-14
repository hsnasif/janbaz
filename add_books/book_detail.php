<?php session_start();
$db=@mysqli_connect('localhost:3308','root','','ebook_management') or die("connection failed".mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Management System</title>
<link rel="stylesheet" type="text/css" href="../../dawaastore/css/med_info.css">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  background-image: url(bg-images/abstract-antique-background-board-172277.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: auto;
  background-color: #333;
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
  padding: 0;
  margin: 0;
}

.hero-image {
  background-image: url(OOBBSP.jpg);
  background-color: #cccccc;
  height: 300px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.footer {
  padding: 12px;
  font-size: 16px;
}

input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 40%;
}

</style>

</head>
<body>
<div class="topnav">
  <a href="../seller_login/signin.php">Seller Login</a>
  <a href="../buyer_login/signin.php">Buyer Login</a>
  <a href="../seller_signup/sellersignup.php">Seller Signup</a>
  <a href="../buyer_signup/buyer_signup.php">Buyer Signup</a>
  <a href="../index.php">Home</a>	
  <p> &nbsp; <font color="#006600" size="+6"> <img src="../images/OOBBSP 4.PNG" height="65px" width="65px"/> <b> OOBSP </b> </font></p>
</div>

<marquee align="middle" bgcolor="#333" style="color:#009900">   
<?php
echo "Today is " . date("d/m/Y");
?>
<?php
echo "(" . date("l"). ") ";
?>
<?php
date_default_timezone_set("Asia/Karachi");
echo " & The time is " . date("h:i:sa");
?>
</marquee>


<p>
  <?php
$bookid=$_GET['id'];
$sql="select * from  book where book_id='$bookid'";
$result=mysqli_query($db, $sql);
while($row=mysqli_fetch_array($result)){?>
</p>


<table align="center" width="300">

<tr><td colspan="2"><img src="<?php echo "book_images/".$row['image']; ?>" width="250" height="180"/></td></tr>
<tr><td> ISBN </td><td><b><?php echo strtoupper($row['ISBN']);?></b></td></tr>
<tr><td> Book Name </td><td><b><?php echo strtoupper($row['Book_Name']);?></b></td></tr>
<tr><td> Publisher Name </td><td><b><?php echo strtoupper($row['Publisher_Name']);?></b></td></tr>
<tr><td> Price </td><td><b><?php echo strtoupper($row['Price']);?></b></td></tr> 
<tr><td> Pages </td><td><b><?php echo strtoupper($row['Pages']);?></b></td></tr>

</table>


<?php } ?>


</body>
</html>