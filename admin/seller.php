<?php session_start();
$db=@mysqli_connect('localhost:3308','root','','ebook_management') or die("connection failed".mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Management System</title>
<link rel="stylesheet" type="text/css" href="../../dawaastore/css/med_info.css">
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

</style>
</head>
<body>

<h2 style="color:#006600"> Seller </h2> <a href="admin_pannel.php"> Back to Admin Pannel</a>
<div class="container">

<p>
  <?php
$sql="select * from  seller";
$result=mysqli_query($db, $sql);
while($row=mysqli_fetch_array($result)){?>
</p>


<table border="1" width="100%">

<tr><td width="20%"> Seller ID </td><td width="80%"><b><?php echo strtoupper($row['seller_id']);?></b></td></tr>
<tr><td width="20%"> Seller Name </td><td width="80%"><b><?php echo strtoupper($row['Seller_Name']);?></b></td></tr>
<tr><td width="20%"> Mobile Number </td><td width="80%"><b><?php echo strtoupper($row['Mobile']);?></b></td></tr>
<tr><td width="20%"> Email </td><td width="80%"><b><?php echo strtoupper($row['email']);?></b></td></tr> 
<tr><td width="20%"> City </td><td width="80%"><b><?php echo strtoupper($row['City']);?></b></td></tr>
<tr><td width="20%"> Address </td><td width="80%"><b><?php echo strtoupper($row['Address']);?></b></td></tr>

</table>


<?php } ?>

</div>
</body>
</html>