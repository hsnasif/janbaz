<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;width:99%;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {  
  text-align: center;
  margin: 24px 0 6px 0;
}

img.avatar {
  width: 20%;
  border-radius: 20%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

}
</style>
</head>

<body bgcolor="#CCCCCC">

<br/>
<br/>
<br/>

<center>
<form action="signin_logic.php" method="post">
  <div class="imgcontainer">
    <img src="images/Admin.png" alt="Avatar" class="avatar" height="170px" width="80px">
  </div>

  <div class="container">

<form action="signin_logic.php" method="POST">
    <label for="admin_id"><b>Admin ID</b></label>
    <input type="text" placeholder="Admin ID" name="admin_id" required>
<br/>
    <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
<br/>        
    <button type="submit">Login to Admin Portal</button>
	<div class="cancelbtn">
	<button type="button"> <a href="../index.php"> Back to Home </a></button>
	</div>

</form>
</div>
</center>
</body>
</html>