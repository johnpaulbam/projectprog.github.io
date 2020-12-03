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



.update {
	float: center;
	background-color: #99f3bd;
	width: 500px;
	height: auto;
	margin-top: 30px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
}
label {
	display: inline-block;
	width: 150px;
	margin-left: 10px;
}

.update1 {
	float: left;
	background-color: #99f3bd;
	width: 250px;
	height: auto;
	border: 2px solid grey;
	margin-left: 200px;;
	margin-top:30px;
}
.logo img {
      float: left;
      max-width: 50px;
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

<center><div class="update1">
<h2>Update</h2>
<form action='updateprojectadmin.php' method='post'>
<p>Enter Project Name: <input type="text" name="projectname" size=20 maxlength=40 required/></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
</div>
<div class="update">
<?php
if (isset($_POST['search'])) {
include('mysql_connect.php');
$projectname = $_POST['projectname'];
$query = "Select * FROM newProject WHERE Project_Name='$projectname' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if($row) {

	echo "<form action='updatedprojectadmin.php' method='post'>";
	echo "<br><label>Client Name : </label>" . "<input type=hidden name=cn value='$row[0]'>$row[0]" . "<br><br>";
	echo "<label> Project_Name : </label>" . "<input type=text name=pm value='$row[1]'> <br><br>";
	echo "<label>Project_Goal : </label>" . "<input type=text name=pg value='$row[2]'> <br><br>";
	echo "<label>Project_Deliverables : </label>" . "<input type=text name=pd value='$row[3]'> <br><br>";
	echo "<label>Intial_start_Date : </label>" . "<input type=text name=start value='$row[4]'> <br><br>";
	echo "<label>Intial_end_Date : </label>" . "<input type=text name=end value='$row[5]'> <br><br>";
	
	echo "<center><p><button type='text' name='update' value='$row[1]'>UPDATE</button></p></center> </form>";
}
else 
echo "No record found..."; 
 }   
?>
</div>
