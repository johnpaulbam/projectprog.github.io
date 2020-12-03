<?php
/*
--------------------------------------------------------------------------------------------------------------------------------
Script Name: search.php
Author: <type your name>
Description: To search for a particular record using user_id as the key field
--------------------------------------------------------------------------------------------------------------------------------
*/
?>


<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.User {
  float: left;
  overflow: hidden;
}

.User .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .User:hover .dropbtn {
  background-color: red;
}

.User-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.User-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.User-content a:hover {
  background-color: #ddd;
}

.User:hover .User-content {
  display: block;
}

body {
	background-color: #d2f6c5;
}

.header {
  text-align: left;
  background: #d2f6c5;
  font-size: 25px;
  width: 100%;
}
.logo img {
      float: left;
      max-width: 50px;
    }
.delete {
	float: center;
	background-color: #99f3bd;
	width: 400px;
	height: auto;
	margin-top: 30px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
}
label {
	display: inline-block;
	width: 125px;
	margin-left: 10px;
}

.delete1 {
	float: left;
	background-color: #99f3bd;
	width: 250px;
	height: auto;
	border: 2px solid grey;
	margin-left: 200px;
	margin-top:30px;
}

</style>
<div class="header"> 
<div class="logo">
      <img src="logo.png" alt="">
 </div>
<h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
<hr>
<div class="navbar">
  <a href="homepageadmin.php">Home</a>
   <div class="User">
    <button class="dropbtn">Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
    <a href="projectview.php">View Users</a>
	<a href="projectupdate.php">Update Users</a>
<a href="projectdelete.php">Delete Users</a>
<a href="viewfeedback.php">View Users Feedback</a>
    </div>
  </div> 
<div class="User">
    <button class="dropbtn">Project
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
	 <a href="createprojectadmin.php">Register New Project</a>
    <a href="viewprojectadmin.php">View Register Project</a>
    <a href="deleteprojectadmin.php">Delete Project</a>
	<a href="updateprojectadmin.php">Update Project</a>
    </div>
  </div> 
	  <a href="Aboutusadmin.php">About Us</a>
  <a href="projectlogin.php">Logout</a>
 </div>
</div>
</div>

<div class="delete1">
<h2>Delete</h2>
<form action='projectdelete.php' method='post'>
<p style="margin-left:10px;">Email: <input type="text" name="Email" size=20 maxlength=40 required/></p>
<center><p><input type='submit' name='search' value='Search' /></p></center>
</form> </div>

<div class="delete">
<?php
if (isset($_POST['search']))
	{
	include('mysql_connect.php');
	
	$e = $_POST['Email'];
	$query = "Select id, Fname, Lname, Email, Age, Birthdate, Gender, Address, Contact_no, Registration_date FROM users WHERE EmaiL LIKE'%$e%'";
	$result = @mysqli_query($conn, $query);
	
	
while($row = mysqli_fetch_array($result))
	{

		echo "<label><br>User ID : </label> " . $row[0] . "<br>";
		echo "<label>Name : </label> " . $row[1] . " " . $row[2] . "<br>";
		echo "<label>Email Address : </label> " . $row[3] . "<br>";
		echo "<label>Age : </label> " . $row[4] . "<br>";
		echo "<label>Birthdate : </label> " . $row[5] . "<br>";
		echo "<label>Gender : </label> " . $row[6] . "<br>";
		echo "<label>Address : </label> " . $row[7] . "<br>";
		echo "<label>Contact No. : </label> " . $row[8] . "<br>";
		echo "<label>Date registered : </label> " . $row[9] . "<br>";
		echo "<form action='projectdeleted.php' method='post'>
		<center><br><h4>Deleting Record.... Are you sure?</h4> 
		<input type=radio name='ans' value='Yes'>YES
		<input type=radio name='ans' value='No'>NO <br><br></center>
		<center><p><button type='submit' name='delete' value='$row[id]'>DELETE</button></p></center> </form>";
}

}

		
?>
</div>
