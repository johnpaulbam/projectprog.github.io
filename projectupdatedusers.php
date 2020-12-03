
<div class="header"> 
<center><h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2></center>
<hr>
<div class="navbar">
  <a href="homepage.php">Home</a>
   <div class="User">
    <button class="dropbtn">User 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
    <a href="projectviewprofile.php">View Profile</a>
	<a href="projectupdateusers.php">Edit Profile</a>
    <a href="DNextGenITPersonalityQuiz.php">Answer Quizes</a>
    <a href="UsersFeedback.php">Create Feedback</a>
    </div>
  </div> 
<div class="User">
    <button class="dropbtn">Project 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
   
    <a href="CreateProject.php">Create New Project</a>
    <a href="viewprojectcreated.php">View Created Project</a>
    </div>
  </div> 
	  <a href="AboutUs.php">About Us</a>
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
	$ad = $_POST['Ad'];
	$bd = $_POST['Bd'];
	$gen = $_POST['Gen'];
	$ad = $_POST['Ad'];
	$contactno = $_POST['C_no'];

	$query = "Select * FROM users";
	$result = @mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	
if ($row)
	{
	$query = "UPDATE users SET Fname='$fn', Lname='$ln', Email='$e', Age='$a', Birthdate='$bd', Gender='$gen', Address='$ad', Contact_no='$contactno' WHERE id= '$updateid'";
	mysqli_query($conn, $query);
	echo "<h2>Record has been updated...</h2>";
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

