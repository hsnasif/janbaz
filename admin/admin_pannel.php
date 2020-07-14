<?php session_start();?>
<html>
<head>
<title> OOBBSP's Admin Panel </title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 style="color:#006600"> Admin Pannel </h2>

<?php 
$con=@mysqli_connect('localhost:3308','root','','ebook_management') 
or 
die("connection failed".mysqli_connect_error());
$user = $_SESSION['admin_id'];
$sql="select * from admin where admin_id='$user'";
$result=mysqli_query($con,$sql);
while($getname=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
<?php } ?>
<div class="container">
  <div style="text-align:center">
	<p align="center"><img src="images/Admin.png" width=150" alt="adminlogo" id="adminlogo"></p>
	<p align="center"><font color="#006600"><?php echo "Welcome, &nbsp; <u> Mr. ".strtoupper($user)."!"."</u>";?></font></p>
  </div>

<table border="2" align="center">
<tr>
<td width="127" align="center"><a href="seller.php"><img src="images/Seller.png" width="100" height="100" alt="Logout"><br/>Seller</a></td>
<td width="131" align="center"><a href="buyer.php"><img src="images/Buyer.png" width="100" height="100" alt="Logout"><br/>Buyer</a></td>
<td width="136" align="center"><a href="../add_books/addbook.php"><img src="images/Book.png" width="100" height="100" alt="Logout"><br/>Add Books</a></td>
<td align="center"><a href="contactus.php"><img src="images/Contact Us.png" width="100" height="100" alt="Logout"><br/>Contact</a></td>
<td width="136" align="center"><a href="add_News.php"><img src="images/news.jpg" width="100" height="100" alt="Logout"><br/>Add News</a></td>
<td width="136" align="center"><a href="../index.php"><img src="images/Log-Out.png" width="100" height="100" alt="Logout"><br/>Signout</a></td>
</tr>
</table>
</body>
</html>