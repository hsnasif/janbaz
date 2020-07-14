<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<h2 style="color:#006600">Add New Books</h2> <br/> <a href="../admin/admin_pannel.php"> Back To Admin Pannel </a>

<div class="container">
  <div style="text-align:center">
  </div>
  <div class="row">
    <div class="column"><br>
    </div>
    <div class="column">

<form name="signup" method="post" action="bookadd_logic.php" enctype="multipart/form-data">

   <h1>Add New Book</h1>

<b>Book Name</b>
<input type="text" name="bookname"/> 

<b>Writer Name</b>
<input type="text" name="writername"/>

<b>Publisher Name</b>
<input type="text" name="publishername"/> 

<b>Year of Publication</b>
<input type="text" name="year"/> 

<b>ISBN</b>
<input type="text" name="isbnumber"/> 

<b>Pages</b>
<input type="text" name="pages"/> 

<b>Price</b>
<input type="text" name="price"/>

<b>Upload Image</b>
<input type="file" name="bookimages"/>

<br/><br/>
<input type="submit" name="Signup" value="Add Book"/> 

</form>

    </div>
  </div>
</div>

</body>
</html>
