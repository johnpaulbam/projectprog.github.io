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

body {
	background-color: #d2f6c5;
}

.header {
  text-align: left;
  background: #d2f6c5;
  font-size: 25px;
  width: 100%;
}

/* The sidebar menu */
.sidenav {
  height: 100%; 
  width: 160px; 
  position: fixed; 
  z-index: 1; 
  top: 0; 
  right: 0;
  background-color: #28df99;
  overflow-x: hidden; 
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #FCF8E8;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
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

label {
	display: inline-block;
	width: 125px;
	margin-left:10px;
}
.search {
	float: center;
	background-color: #99f3bd;
	width: 400px;
	height: auto;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
}
.search1 {
	float: left;
	background-color: #99f3bd;
	width: 250px;
	height: auto;
	border: 2px solid grey;
	margin-left: 200px;;
}
</style>
<!-- Side navigation -->



<div class="header"> 
<center><h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2></center>
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
</div>

<div class="search1">
<h2>Search</h2>
<form action='projectsearch.php' method='post'>
<p style="margin-left:10px">Email: <input type="text" name="Email" size=20 maxlength=40 /></p>
<center><p><input type='submit' name='search' value='Search' /></p></center>
</form> </div>

<div class="search">
<?php
if (isset($_POST['search']))
	{
	include('mysql_connect.php');
	$e = $_POST['Email'];
	$query = "Select id, Fname, Lname, Email, Age, DATE_FORMAT(Birthdate, '%M %d %y'), Gender, Address, Contact_no, DATE_FORMAT(Registration_date, '%M %d %y') FROM users WHERE EmaiL LIKE'%$e%' ";
	$result = @mysqli_query($conn, $query);
	
	
	
while($row = mysqli_fetch_array($result))
	{
		echo "<label><br>User ID : </label>" . $row[0] . "<br>";
		echo "<label>Name : </label>" . $row[1] . " " . $row[2] . "<br>";
		echo "<label>Email Address : </label>" . $row[3] . "<br>";
		echo "<label>Age : </label>" . $row[4] . "<br>";
		echo "<label>Birthdate : </label>" . $row[5] . "<br>";
		echo "<label>Gender : </label>" . $row[6] . "<br>";
		echo "<label>Address : </label>" . $row[7] . "<br>";
		echo "<label>Contanct No. : </label>" . $row[8] . "<br>";
		echo "<label>Date registered : </label>" . $row[9] . "<br><br>";
	}
}

?>
</div>

