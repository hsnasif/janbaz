<?php
$con=mysqli_connect("localhost:3308","root","","ebook_management")
or 
die("Could Not Connect To The Server!!!");
mysqli_select_db($con,"ebook_management")
or
die("Could Not Find DB!!!");
$output='';
//collect
if(isset($_POST['search']))
{
	$searchq =$_POST['search'];
	$search =preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query=mysqli_query("SELECT * FROM book WHERE Book_Name LIKE '%$searchq%' OR Writer_Name LIKE '%$searchq%'")
	or 
	die("Could Not Search Book");
	$count=mysqli_num_rows($query);
	if($count==0)
	{
	$output='There Was No Result Found!!!';
	}
	else
	{
	while($row=mysqli_fetch_array($query))
	{
		$bookname=$row['bookname'];
		$writername=$row['writername'];
		$publishername=$row['publishername'];
		$year=$row['year'];
		$isbn=$row['isbnumber'];
		$pages=$row['pages'];
		$price=$row['price'];
		$image=$row['bookimages'];
		$output .= '<div> '.bookname.' '.writername.' '.publishername.' '.year.' '.isbn.' '.pages.' '.price.' '.image.'  </div>';
	}
	}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>oobbsp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<form action="search.php" method="post">
  <table align="right" height="50px">
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td>
  <input type="text/submit" placeholder="Search for Books..."></td></tr>

  <tr height="20"><td></td></tr>
  <tr> <td>
  <font color="#FFFFFF"> 
  <?php
echo "Today is " . date("d/m/Y");
?>
<?php
echo "(" . date("l"). ") ";
?>
</font>
</td></tr>
<tr><td>
<font color="#FFFFFF"> 
<?php
date_default_timezone_set("Asia/Karachi");
echo " The time is " . date("h:i:sa");
?>
</font>
</td></tr>
  </table>
</form>
	<?php print("$output");?>
  <a href="seller_login/signin.php">Seller Login</a>
  <a href="buyer_login/signin.php">Buyer Login</a>
  <a href="seller_signup/sellersignup.php">Seller Signup</a>
  <a href="buyer_signup/buyer_signup.php">Buyer Signup</a>
  <a href="index.php">Home</a>	
  <p> &nbsp; <font color="#006600" size="+6"> <img src="images/OOBBSP 4.PNG" height="65px" width="65px"/> <b> OOBSP </b> </font></p>
  <hr color="#FFFFFF">
</div>

<marquee align="middle" bgcolor="#333" style="color:#009900">   

<?php 
$sql="select * from news";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
while($row=mysqli_fetch_array($result)){ ?>
<?php echo $row['News_Details'];echo "     &nbsp; &nbsp;    "; }?>


</marquee>

<div class="hero-image">
  <div class="hero-text">
    <img src="images/bookshelf.png" height="150" width="700">
  </div>
</div>  

<div class="content">
  <hr color="#006600">
  <hr color="#006600">
  <hr color="#006600">
  
<?php 
$sql="select * from book";
$result=mysqli_query($con,$sql) or die(mysqli_connect_error());
while($row=mysqli_fetch_array($result)){?>
<a href="add_books/book_detail.php?id=<?php echo $row['book_id'];?>">
<tr align="center"><td><img src="<?php echo "add_books/book_images/".$row['image']; ?>" width="265" height="200">
<?php } ?></td></tr></a>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
</div>

<div class="footer" align="center">

<hr size="3" color="#006600">
<hr size="3" color="#006600">

<font color="#FFFFFF">
	(<u>Credits <a href="admin/signin.php" style="color: #FFFFFF"> : </a> Asif Javed & Abdullah Sarfraz</u>)
	<br/>
	&copy; Copyright <?php echo date("Y");?>
	
</font>
<hr size="3" color="#006600">
<hr size="3" color="#006600">

</div>

</body>
</html>