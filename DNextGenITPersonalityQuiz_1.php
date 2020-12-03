<html>
<meta charset="UTF-8">
		
		<title>D'NextGen | Online Quiz System</title>
		
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
label{
color:gray;
font-size:14px;
}
div#container{
background-color: #99f3bd;
weight:50px;
width:490px;
height: 372px;

}div#content{
texy-align:center;
width:50%;

}
.button2 {
border-radius: 4px;
height:40px;
width:100px;
}
.center {
  margin-left: auto;
  margin-right: auto;
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
   </style>
	</head>
<div class="header"> 
<div class="logo">
      <img src="logo.png" alt="">
	  </div>
<h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
<hr>
	<body>
		

<br/>
<br/>
<br/><br/>
<center><div id='container'>

<?php
$answer1=$_POST['answerOne'];
$answer2=$_POST['answerTwo'];
$answer3=$_POST['answerThree'];
$answer4=$_POST['answerFour'];
$answer5=$_POST['answerFive'];
$answer6=$_POST['answerSix'];
$answer7=$_POST['answerSeven'];
$answer8=$_POST['answerEight'];
$answer9=$_POST['answerNine'];
$answer10=$_POST['answerTen'];


$score= 0;



if ($answer1 == "A") {$score++;}
if ($answer2 == "A") {$score++;}
if ($answer3 == "A") {$score++;}
if ($answer4 == "A") {$score++;}
if ($answer5 == "B") {$score++;}
if ($answer6 == "B") {$score++;}
if ($answer7 == "C") {$score++;}
if ($answer8 == "B") {$score++;}
if ($answer9 == "B") {$score++;}
if ($answer10 == "A") {$score++;}


echo "<br></br>";
session_start();
		include('mysql_connect.php');
		$id = $_SESSION['id'];
		$query = "SELECT Fname, Lname FROM users WHERE id = '$id'";
			$result = @mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			if($row)
			{
				echo " $row[0] $row[1] ";
			}
echo "<center>Your Score Is $score/10</center>";
$grade = ($score / 10) * 100;
echo "<center> Your Percentage is: $grade%</center>"

?>
<br><center>Thank you.<br>

Your quiz score will be record..
<br><br><center><a href="homepage.php" >Back</a><br><br></center>


<br><br><br>
<br><label>Created by:<label>

<br><label>Antonio,Geraldine<label>

<br><label>Bambalan,Mac John Paul<label>

<br><label>Bergonia,Mary Rose<label>

<br><label>Ebuenga,Camille<label>

<br><label>Mariano,Alyssa<label><br><br>



	</body>
</html>