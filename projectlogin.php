<?
session_start();
require(projectviewprofile.php);
?>
<html>
<head><title>Account Login</title>
<style>
body{  
	margin: 0;  
	padding: 0;  
	font-family: 'Arial';  
	background-image: url('bc.png');
	background-repeat: no-repeat;
	background-attachment: fixed;  
	background-size: cover;
}  
.header {
  text-align: left;
  font-size: 25px;
  width: 100%;
  margin-top:10px;
}
.button{

	  display: block;
  width: 50%;
  border: none;
  background-color: gray;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.logo{  
	top: 50px;
	position: absolute;
  	left: 200px;           
}  
.login{  
	top: 100px;
	position: absolute;
  	left: 750px;
  	width: 300px; 
	height: 250px;
    overflow: hidden;  
    margin: 20 0 0 20;
    padding: 50px;  
    background:  #28df99;  
    border-radius: 10px ;       
}   
label{  
    color: white;  
    font-size: 17px;  
}  
#Eadd{  
    width: 300px;  
    height: 30px;  
    border: none;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    padding-left: 8px;  
     
}  

span{
    color: white;  
    font-size: 17px;  
} 
a{
    color: white;  
    font-size: 17px;  
}  
</style>
</head>
<div class="header"> 
<center><h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2></center>
<hr>
<body>
<div class="logo">
<img src="logo1.png" width="450" height="500">

</div>
<div class = "login">

<form id = "login" action="projectlogin.php" method="POST">
	 
	 <label>Email Address:</label><input type="text" id="Eadd" name="email" size=20 maxlength=40 ><br><br>
	 <label>Password</label><input type="password" id="Pass" name="password" size=20 maxlength=40 ><br><br>
	<center><button class="button" type="submit" name="submit" >Login</button><br><br></center>

	<center><span>Register</span> <a href = "projectregister.php">Sign up</a></center>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	include('mysql_connect.php');
	$email = $_POST['email'];
	$pass = $_POST['password'];
	if(!empty($_POST['email']) || !empty($_POST['password']))
	{
		$query="SELECT id, Fname, LName, UserType FROM users WHERE Email = '$email' AND Password = SHA('$pass')";
		$result = @mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		if($row)
		{
			if($row[3] == "user")
			{
				session_start();
				$_SESSION['id'] = $row[0];
				echo header("Location: homepage.php");
				$_SESSION['Fname'] = $row[1];
				exit();
			}
			if ($row[3] == "admin")
				
				session_start();
				$_SESSION['id'] = $row[0];
				echo header("Location: homepageadmin.php");
				exit();
		}
		else
		{
		echo 'The email address and password  do not match those on file';
		}
	}
else
	echo 'Please enter email and/or password...';
	mysqli_close($conn);
}
?>

</body>
</html>