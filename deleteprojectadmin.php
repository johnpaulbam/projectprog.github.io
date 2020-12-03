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
	background-color: #99f3bd;
	width: 410px;
	height: auto;
	margin-top: 30px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
	text-align:left;
}
.delete1 {
	float: left;
	background-color: #99f3bd;
	width: 250px;
	height: auto;
	border: 2px solid grey;
	margin-left: 200px;
	margin-top:10px;
}
.delete label {
	display: inline-block;
	width: 400px;
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
<center><div class="delete1">
<h2>Delete</h2>
<form action='deleteprojectadmin.php' method='post'>
<p>Enter Project Name:<input type="text" name="user_id" size=20 maxlength=40 required/></p> 
<p><input type='submit' name='search' value='Search' /></p>
</form>
</div>
<div class="delete">
<?php
if (isset($_POST['search'])) {
include('mysql_connect.php');
$id = $_POST['user_id'];
$query = "Select * FROM newProject WHERE Project_Name ='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($row) {

echo "<label><br><br><b>User ID: </b>" . $row[6] . "</label><br><br>";
echo "<label><b>Client Name: </b>" . $row[0] . "</label><br><br>";
echo "<label><b>Project Name : </b>" . $row[1] . "</label><br><br>";
echo "<label><b>Project Goal: </b>" . $row[2] . "</label><br><br>";
echo "<label><b>Project Deliverables: </b>" . $row[3] . "</label><br><Br>";
echo "<label><b>Intial start Date: </b>" . $row[4] . "</label><br><br>";
echo "<label><b>Intial end Date: </b>" . $row[5] . "</label><br><br>";

echo "<form action='deletedprojectadmin.php' method='post'>
<br><center><h4>Deleting Project.... Are you sure?</h4>
<p><input type=hidden name='user_id' value='$_POST[user_id]'>
<input type=radio name='ans' value='Yes'>YES
<input type=radio name='ans' value='No'>NO <br><br>
<p><button type='submit' name='delete' value='$row[1]'>DELETE</button></p> </form>";
}else
echo "No record found..."; }   
?>
</div>