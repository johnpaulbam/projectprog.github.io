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
	$cn = $_POST['cn'];
	$pm = $_POST['pm'];
	$pg = $_POST['pg'];
	$pd = $_POST['pd'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$query = "Select * FROM newProject";
	$result = @mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	
if ($row)
	{
	$query = "UPDATE newProject SET Client_Name='$cn',Project_Name='$pm', Project_Goal='$pg',Project_Deliverables='$pd', Intial_start_Date='$start',Intial_end_Date='$end'  WHERE Project_Name= '$updateid' ";
	mysqli_query($conn, $query);
	echo "<h2>Project has been updated...</h2>";
	}
}
?>


<style>
.logo img {
      float: left;
      max-width: 50px;
    }
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


/* Style page content */
.main {
  margin-left: 160px;
  padding: 0px 10px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.container {
	float: right;
	background-color: #394867;
	width: 450px;
	height: 420px;
	margin-right: 470px;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 2px solid grey;
	opacity: 1;
}

</style>

