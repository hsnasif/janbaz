<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sellere Signup</title>
<style>
body, html {
  height: 100%;
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


* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url(../../OOBBSP.jpg);

  min-height: 122%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>

</head>

<body marginheight="0" marginwidth="0">

<div class="topnav">
  <a href="../seller_login/signin.php">Seller Login</a>
  <a href="../buyer_login/signin.php">Buyer Login</a>
  <a href="sellersignup.php">Seller Signup</a>
  <a href="../buyer_signup/buyer_signup.php">Buyer Signup</a>
  <a href="../index.php">Back to Home</a>	
  <p> &nbsp; <font color="#339900" size="+6"> <img src="../images/OOBBSP 4.PNG" height="65px" width="65px"/> OOBSP </font></p>
</div>

<div class="bg-img">

<form action="sellersignup_logic.php" method="post" enctype="multipart/form-data" class="container">

   <h1>Seller Signup</h1>

<b>Seller Name</b>
<input type="text" placeholder="Seller Name" name="Seller_Name">

<b>Password</b>
<input type="password" placeholder="Enter Password" name="Password" required>

<b>Mobile Number</b>
<input type="text" placeholder="Mobile Number" name="Mobile" required>

<b>Email</b>
<input type="text" placeholder="Email" name="email" required>

<b>City</b>
<input type="text" placeholder="City" name="City" required>

<b>Address</b>
<input type="text" placeholder="Address" name="Address" required>

<b>Upload Your Image</b>
<input type="file" name="sellerimages" required>

<input type="submit" value="Register" class="btn">

</form>
</div>
</body>
</html>

