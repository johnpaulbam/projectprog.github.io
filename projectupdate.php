<?php
/*
--------------------------------------------------------------------------------------------------------------------------------
Script Name: update.php
Author: <type your name>
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
	
label {
	display: inline-block;
	width: 125px;
	margin-left:10px;
}
.update {
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
.update1 {
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

<div class="update1">
<h2>Update Record</h2>
<form action='projectupdate.php' method='post'>
<p style="margin-left:10px;">Email: <input type="text" name="Email" size="20" maxlength="40" required></p>
<center><p><input type='submit' name='search' value='Search'/></p></center>
</form> </div>

<div class ="update">
<?php
if (isset($_POST['search']))
{
	include('mysql_connect.php');
	$e = $_POST['Email'];
	$query = "SELECT id, Fname, Lname, Email, Age, Birthdate, Gender,  Address, Contact_no, DATE_FORMAT(Registration_date, '%M %d %y'),UserType FROM users WHERE Email LIKE '%$e%' ";
	$result = @mysqli_query($conn, $query);
	//$row = mysqli_fetch_array($result);
	
while ($row = mysqli_fetch_array($result))
{
	echo "<form action='projectupdated.php' method='post'>";
	echo "<br><label>User ID : </label>" . "<input type=hidden name=id value='$row[0]'>$row[0]" . "<br><br>";
	echo "<label>First Name : </label>" . "<input type=text name=Fn value='$row[1]'> <br><br>";
	echo "<label>Last Name : </label>" . "<input type=text name=Ln value='$row[2]'> <br><br>";
	echo "<label>Email Address : </label>" . "<input type=text name=Em value='$row[3]'> <br><br>";
	echo "<label>Age : </label>" . "<input type=text name=Ag value='$row[4]'> <br><br>";
	echo "<label>Birthdate : </label>" . "<input type=text name=Bd value='$row[5]'> <br><br>";
	echo "<label>Gender : </label>" . "<input type=text name=Gen value='$row[6]'> <br><br>";
	echo "<label>Address : </label>" . "<input type=text name=Ad value='$row[7]'> <br><br>";
	echo "<label>Contact No. : </label>" . "<input type=text name=C_no value='$row[8]'> <br><br>";
	echo "<label>Date registered : </label>" . $row[9] . "<br><br>";
	echo "<label>UserType : </label>" . "<input type=text name=Usertype value='$row[10]'> <br><br>";
	echo "<center><p><button type='submit' name='update' value='$row[id]'>UPDATE</button></p></center> </form>";
}
}
?>
</div>
