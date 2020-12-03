
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
	height:100%;
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
	width: 350px;
	height: auto;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 2px solid grey;
	margin-left: auto;
	margin-right: auto;
}
label {
	display: inline-block;
	width: 125px;
	margin-left:10px;
}
</style>


<div class="header">
<div class="logo">
      <img src="logo.png" alt="">
	  </div> 
<h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
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
<h1 style="margin-left:10px;">Edit Profile</h1>
<?php	
		session_start();
		include("mysql_connect.php");
		$id = $_SESSION['id'];
		$query = "SELECT id, Fname, Lname,Email,Age, Birthdate,Gender, Address,Contact_no, 
		DATE_FORMAT(Registration_date,'%M %d, %Y'), UserType AS 'Date Registered'FROM users WHERE id = '$id'";
			$result = @mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			if($row)
			{	echo "<div class='container'>";
				echo "<form action='projectupdatedusers.php' method='post'>";
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
	echo "<label>UserType : </label>" . $row[10] . "<br><br>";

	echo "<center><p><button type='submit' name='update' value='$row[id]'>UPDATE</button></p></center> </form>";
				echo "</div><br><br><br>";
			}
?>




