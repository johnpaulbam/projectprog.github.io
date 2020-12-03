<?php
/*
-------------------------------------------------------------------------------
Script Name: registerUsers.php
Author: 
Description: The page to sign in or to register record in the database
-------------------------------------------------------------------------------
*/
$vFname = $vLname = $vEmail = $vAge = $vBirthdate = $vGender = $vAddress = $vContact_no = $vPassword = "";
$Fname = $Lname = $Email = $Age = $Birthdate = $Gender = $Address = $Contact_no = $Password = "";
if(isset($_POST['btnRegister']))
{
	$validName="/^[a-zA-Z\s]+$/";
	$validNum="/^([0-9]*)$/";
	$validCont="/^[0-9]*$/";
	$validEmail="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
	//First Name Validation
	if (empty($_POST['Fname']))
	{
		$vFname = "First name required...";
	}
	else if(!preg_match ("$validName",($_POST['Fname']))) 
	{
		$vFname = "Name must only contain letters...";
	} 
	//Last Name Validation
	if (empty($_POST['Lname']))
	{
		$vLname = "Last name required...";
	}
	else if(!preg_match ("$validName",($_POST['Lname']))) 
	{
		$vLname = "Name must only contain letters...";
	} 
	//Email Address Validation
	if (empty($_POST['Email']))
	{
		$vEmail = "Email address is required...";
	}
	else if(!preg_match ("$validEmail",($_POST['Email']))) 
	{
		$vEmail = "Invalid email address...";
	}
	//Age Validation
	if (empty($_POST['Age']))
	{
		$vAge = "Age required... ";
	}
	else if (!preg_match ("$validNum",($_POST['Age'])))
	{
		$vAge = "Age must contain numbers only... ";
	}
	//Birthdate Validation
	if (empty($_POST['Birthdate']))
	{
		$vBirthdate = "Birthdate required...";
	}
	//Gender Validation
	if (empty($_POST['gender']))
	{
		$vGender = "Empty Fields... ";
	}
	//Address Validation
	if (empty($_POST['Address']))
	{
		$vAddress = "Address is required...";
	}
	//Contact Number Validation
	if (empty($_POST['Contact_no']))
	{
		$vContact_no = "Contact number is required...";
	}
	else if(!preg_match("$validCont", ($_POST['Contact_no']))) 
	{
		$vContact_no = "Invalid phone number format...";
	}  
	//Password Validation
	if (empty($_POST['Password']))
	{
		$vPassword = "Password required...";
	}
	if ($vFname != '' OR $vLname != '' OR  $vEmail != '' OR  $vAge != '' OR  $vBirthdate != '' OR  $vGender != '' OR  $vAddress != '' OR  $vContact_no != '' OR $vPassword != '') 
	{
		echo "";
	}
	else
	{
	$fn = $_POST['Fname'];
	$ln = $_POST['Lname'];
	$e = $_POST['Email'];
	$a = $_POST['Age'];
	$bd = $_POST['Birthdate'];
	$gen = $_POST['gender'];
	$ad = $_POST['Address'];
	$Cont_no = $_POST['Contact_no'];
	$p = $_POST['Password'];
	$type = "user";
	
	include('mysql_connect.php');
	$query = "INSERT INTO users(Fname, Lname, Email, Age, Birthdate, Gender, Address, Contact_no, Password, Registration_date,UserType)
	VALUES ('$fn', '$ln', '$e', '$a', '$bd', '$gen', '$ad', '$Cont_no', SHA('$p'), NOW(),'$type')";
	$result = @mysqli_query($conn, $query);
		header("Location: projectsave.php");
		mysqli_close($conn);
	}
}
?>
<html>
<head><title>Register Account</title>
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

.container {
	float: center;
	background-color: #99f3bd;
	width: 500px;
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
</style>
</head>
<body>
<div class="header">

<div class="logo">
      <img src="logo.png" alt="">
 </div>

<h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
<hr>
</div>
<div class="container">
<h2 style="margin-left:10px;">Register Account</h2>
<p><span class = "error"> * required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class = "display"><br>
	<label>First Name:</label><input type="text" name="Fname" value = "<?php if(isset($_POST["Fname"])) echo $_POST["Fname"]; ?>">
	<span class = "error">* <?php echo $vFname;?></span><br><br>

	<label>Last Name:</label><input type="text" name="Lname" value = "<?php if(isset($_POST["Lname"])) echo $_POST["Lname"]; ?>">
	<span class = "error">* <?php echo $vLname;?></span><br><br>

	<label>Email:</label><input type="text" name="Email" value = "<?php if(isset($_POST["Email"])) echo $_POST["Email"]; ?>">
	<span class = "error">* <?php echo $vEmail;?></span><br><br>

	<label>Age:</label><input type="text" name="Age" value = "<?php if(isset($_POST["Age"])) echo $_POST["Age"]; ?>">
	<span class = "error">* <?php echo $vAge;?></span><br><br>

	<label>Birthdate:</label><input type="date" max="2019-12-31" name="Birthdate" value = "<?php if(isset($_POST["Birthdate"])) echo $_POST["Birthdate"]; ?>">
	<span class = "error">* <?php echo $vBirthdate;?></span><br><br>
	
	<label>Gender:</label>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<span class = "error">* <?php echo $vGender;?></span><br><br>


	<label>Address:</label><input type="text" name="Address" value = "<?php if(isset($_POST["Address"])) echo $_POST["Address"]; ?>">
	<span class = "error">* <?php echo $vAddress;?></span><br><br>
	<label>Contact No.:</label><input type="text" name="Contact_no" maxlength="13" value = "<?php if(isset($_POST["Contact_no"])) echo $_POST["Contact_no"]; ?>">
	<span class = "error">* <?php echo $vContact_no;?></span><br><br>
	<label>Password:</label><input type="password" name="Password" maxlength="10">
	<span class = "error">* <?php echo $vPassword;?></span><br><br>
</div>	
<input style="float:left; margin-left: 165px;" type="submit" class = "block" name="btnRegister" value="Register">
<br><br><center><a href="projectlogin.php">Back</a><br><br>
</form>
</body>
</html>
</div>