<?php

$vq1 = $vComments = $vEmail ="";
$q1 = $comments = $Email ="";

if (isset($_POST['save']))
{
	$validName="/^[a-zA-Z\s]+$/";
	$validEmail="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
	
	//Email Address Validation
	if (empty($_POST['Email']))
	{
		$vEmail = "Email address is required...";
	}
	else if(!preg_match ("$validEmail",($_POST['Email']))) 
	{
		$vEmail = "Invalid email address...";
	}
	if (empty($_POST['comments'])) {
            $errors .= 'Please enter a description of your invention.<br/><br/>';
        } 
		header("Location: UsersFeedbackSave.php");
	}
?>
<style>

body {
	background-color: #d2f6c5;
}

.logo img {
      float: left;
      max-width: 50px;
    }
	
.header {
  text-align: left;
  background: #d2f6c5;
  font-size: 25px;
  width: 100%;
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
<!-- Side navigation -->

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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<h1>Users Experience Feedback</h1>
	<?php
	session_start();
		include("mysql_connect.php");
		$id = $_SESSION['id']; 
		$query = "SELECT id, CONCAT (Fname, ' ' , Lname) AS 'Client Name', Email FROM users WHERE id='$id'";
			$result = @mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			if($row)
			{	
				echo "<b> Thank you for trusting us! Tells us something about your experience with our team! </b> <br><br>";
				echo "User Name: " . "<b>". $row[1] . "</b><br><br>";
				echo "Email Address: " . "<b>". $row[2] . "</b><br><br>";
				$_SESSION['Fname'] = $row[1];
				$_SESSION['Email'] = $row[2];
			}
		mysqli_close($conn);
	?>
<?php 
$vq1 = $vq2 = $vcomment = '';
$q1 = $q2 = $comment = '';
if (isset($_POST['save']))
{
if(empty($_POST['q1'])) 
{
	$vq1 = "Emptry fields...";
}
if(empty($_POST['q2'])) 
{
	$vq2 = "Emptry fields...";
}
if(empty($_POST['comment'])) 
{
	$vcomment = "Emptry fields...";
}
if ( $vq1 != '' OR  $vq2 != '' OR  $vcomment != '')
{
	echo "";
}
else 
{
	session_start();
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$comment = $_POST['comment'];
	$name = $row[1];
	include('mysql_connect.php');
	$id = $_SESSION['id'];
	$query = "INSERT INTO feedback(Client_Name, q1, q2, comment, id)
	VALUES('$name', '$q1', '$q2', '$comment', '$id')";
	$result = @mysqli_query($conn, $query);
	header("Location: UsersFeedbackSave.php");
	mysqli_close($conn);
	}
}
?>

<label><b>Would you recommend our team to others?</b><br>
<input type="radio" name="q1" value= "Yes" required> Yes 
<input type="radio" name="q1" value= "No" required> No
<span class = "error">* <?php echo $vq1;?></span><br><br>
<br><br>
	
<b>Would you allow us to use your feedback on our website? </b><br>
<input type="radio" name="q2" value= "Yes" required> Yes
<input type="radio" name="q2" value= "No" required> No
<span class = "error">* <?php echo $vq2;?></span><br><br>
<br><br>
<b>Please tell us more about your experience with our team! </b> <br>
<textarea rows="5" cols="50" name="comment" required></textarea>
<span class = "error">* <?php echo $vcomment;?></span><br><br>
<br><br>
<input type="submit" name="save" value="Save" style="margin-left:120px;">
<input type="reset" value="Clear"><br><br>

</form>
</body>
</html>