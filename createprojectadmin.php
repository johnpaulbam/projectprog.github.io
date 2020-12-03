<?php 
?>
<html>
<head><title>Create Project</title>


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
.logo img {
      float: left;
      max-width: 50px;
    }
.container {
	float: center;
	background-color: #99f3bd;
	width: 450px;
	height: auto;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
}
label {
	display: inline-block;
	width: 100px;
	margin-left: 10px;
}
.display {
	width: 25%;
	padding: 10px;
	display: inline;
}
.error {
	color: #FF0000;
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
.error {
	color: #FF0000;
}
</style>
</style>
<body>

<div class="header">
<div class="logo">
      <img src="logo.png" alt="">
	  </div> 
<center><h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
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

<center><h2>Create New Project</h2>
<p><span class = "error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class = "display"><br>

<?php
$projectErr = $goalErr =$startErr = $endErr =  $deliErr = '';
$projectname = $projectgoal = $end = $start = $projectdeli = '';
if(isset($_POST['btnSubmit']))
{
	//Project Name Validation
	if(empty($_POST['projectname']))
	{
		$projectErr = "Project name is required...";
	}
	if(empty($_POST['projectgoal']))
	{
		$goalErr = "Project goal is required...";
	}
	if(empty($_POST['start_date']))
	{
		$startErr = "start date is required...";
	}
	if(empty($_POST['end_date']))
	{
		$endErr = "end date is required...";
	}
	if(empty($_POST['projectdeli']))
	{
		$deliErr = "Deliverables is required...";
	}
	if ($projectErr != '' OR $goalErr != '' OR $startErr != '' OR $endErr != '' OR $deliErr != '')
	{
		echo "";
	}
	else
	{
session_start();
	$pm = $_POST['projectname'];
	$pg = $_POST['projectgoal'];
	$pd = $_POST['projectdeli'];
	$sd = $_POST['start_date'];
	$ed = $_POST['end_date'];
	$name = "admin";
	include('mysql_connect.php');
	$id = $_SESSION['id'];
	
	$query = "INSERT INTO newProject(Client_Name,Project_Name,  Project_Goal, Project_Deliverables, Intial_start_Date, Intial_end_Date,  id)
	VALUES ('$name','$pm', '$pg', '$pd', '$sd', '$ed','$id')";
	$result = @mysqli_query($conn, $query);
		header("Location: createsaveadmin.php");
		mysqli_close($conn);
	}
}
?>

	<div class="container">
	<br><label>Project Name:</label><input type="text" name="projectname" size="34px">
	<span class = "error">* <?php echo $projectErr;?></span><br><br>

	<label>Project Goal:</label><input type="text" name="projectgoal" size="34px">
	<span class = "error">* <?php echo $goalErr;?></span><br><br>

	<label>Project Deliverables:</label><input type="text" name="projectdeli" size="34px">
	<span class = "error">* <?php echo $deliErr;?></span><br><br>
	<label>Start Date:</label><input type="date"  name="start_date" value = "<?php if(isset($_POST["start_date"])) echo $_POST["start_date"]; ?>">
	<span class = "error">* <?php echo $startErr;?></span><br><br>
	<label>End Date:</label><input type="date"  name="end_date" value = "<?php if(isset($_POST["end_date"])) echo $_POST["end_date"]; ?>">
	<span class = "error">* <?php echo $startErr;?></span><br><br>


	
	
	<center><input style="float:left; margin-left: 170px;" type="submit" class = "block" name="btnSubmit" value="Submit"><br>
	<center><br><a href="javascript:history.back()">Cancel</a>

</div>
</form>