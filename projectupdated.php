<?php
/*
--------------------------------------------------------------------------------------------------------------------------------
Script Name: updated.php
Author: <type your name>
Description: To save/update modified record
--------------------------------------------------------------------------------------------------------------------------------
*/
?>
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
<?php
if (isset($_POST['update']))
{
	include('mysql_connect.php');
	$updateid= $_POST['update'];
	$id = $_POST['id'];
	$fn = $_POST['Fn'];
	$ln = $_POST['Ln'];
	$e = $_POST['Em'];
	$a = $_POST['Ag'];
	$bd = $_POST['Bd'];
	$gen = $_POST['Gen'];
	$ad = $_POST['Ad'];
	$contactno = $_POST['C_no'];
$usertype = $_POST['Usertype'];
	$query = "Select * FROM users";
	$result = @mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	
if ($row)
	{
	$query = "UPDATE users SET Fname='$fn', Lname='$ln', Email='$e', Age='$a', Birthdate='$bd', Gender='$gen', Address='$ad', Contact_no='$contactno',UserType='$usertype' WHERE id= '$updateid'";
	mysqli_query($conn, $query);
	echo "<center><h2>Record has been updated...</h2></center>";
	}
}
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
</style>

