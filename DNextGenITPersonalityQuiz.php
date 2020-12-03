<html>
<head>
<head>
		<meta charset="UTF-8">
		
		<title>D'NextGen | Online Quiz System</title>
		
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
		p{
color:gray;
font-size:14px;
}
div#container{
background-color: #99f3bd;
weight:50px;
width:490px;

}div#content{
texy-align:center;
width:50%;

}
.button2 {
border-radius: 4px;
height:50px;
width:100px;
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
label {
	display: inline-block;
	width: 180px;
	margin-left: 10px;
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

<center><div id='container'>

<br><center><font face='andalus' size='5'><b>D'NEXT GEN QUIZ</b></font></center>

<br/><br/>

<?php
session_start();
		include('mysql_connect.php');
		$id = $_SESSION['id'];
		$query = "SELECT Fname, Lname FROM users WHERE id = '$id'";
			$result = @mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			if($row)
			{
				echo "<h3>Goodluck, $row[0] $row[1]!</h3>";
			}


echo "
<form method='POST' action='DNextGenITPersonalityQuiz_1.php'  id='quizForm' id='1'>



<ol>
	<li>
	<h3>What does PHP STAND for?</h3>

<div id='content'>
<input type='radio' name='answerOne' id='answerOne' value='A' required/>
<label for='answerOneA'>Pretext Hypertext Processor</label>
</div>

<div id='content'>
<input type='radio' name='answerOne' id='answerOne' value='b' required/>
<label for='answerOneB'>Personal Home Page</label>
</div>

<div id='content'>
<input type='radio' name='answerOne' id='answerOne' value='C' required/>
<label for='answerOneC'>Private Home Page</label>


</div>
</li>

<li>
<h3>Who is the father of PHP?</h3>
<div>
<input type='radio' name='answerTwo' id='answerTwo' value='A' required/>
<label for='answerTwoA'>Rasmus Lerdorf</label>
</div>
<div id='content'>
<input type='radio' name='answerTwo' id='answerTwo' value='B' required/>
<label for='answerTwoB'>Willam Makepiece</label>
</div>
<div id='content'>
<input type='radio' name='answerTwo' id='answerTwo' value='C' required/>
<label for='answerTwoC'>Drek Kolkevi</label>
</div>
</li>

<li>
<h3>PHP files have a default file extension of?</h3>
<div id='content'>
<input type='radio' name='answerThree' id='answerThree' value='A' required/>
<label for='answerThreeA'>.php</label>
</div>
<div>
<input type='radio' name='answerThree' id='answerThree' value='B' required/>
<label for='answerThreeB'>.ph</label>
</div>
<div id='content'>
<input type='radio' name='answerThree' id='answerThree' value='C' required/>
<label for='answerThreeC'>.xml</label>
</div>
</li>

<li>
<h3>Which of the looping statements is/are supported by PHP?</h3>
<div id='content'>
<input type='radio' name='answerFour' id='answerFour' value='A' required/>
<label for='answerFourA'>for loop</label>
</div>
<div id='content'>
<input type='radio' name='answerFour' id='answerFour' value='B' required/>
<label for='answerFourB'>do-while loop</label>
</div>
<div id='content'>
<input type='radio' name='answerFour' id='answerFour' value='C' required/>
<label for='answerFourC'>foreach loop</label>
</div>
</li>

<li>
<h3>All variables in PHP start with which symbol?</h3>
<div id='content'>
<input type='radio' name='answerFive' id='answerFive' value='A' required/>
<label for='answerFiveA'>&</label>
</div>
<div>
<input type='radio' name='answerFive' id='answerFive' value='B' required/>
<label for='answerFiveB'>$</label>
</div>
<div>
<input type='radio' name='answerFive' id='answerFive' value='C' required/>
<label for='answerFiveC'>/</label>
</div>
</li>

<li>
<h3>Which one of the following function is capable of reading a file into an array?</h3>
<div>
<input type='radio' name='answerSix' id='answerSix' value='A' required/>
<label for='answerSixA'>arr_file()</label>
</div>
<div>
<input type='radio' name='answerSix' id='answerSix' value='B' required/>
<label for='answerSixB'>file()</label>
</div>
<div>
<input type='radio' name='answerSix' id='answerSix' value='C' required/>
<label for='answerSixC'>file_arr()</label>
</div>
</li>

<li>
<h3>Which function sets the file filename last-modified and last-accessed times?</h3>
<div>
<input type='radio' name='answerSeven' id='answerSeven' value='A' required/>
<label for='answerSevenA'>sets()</label>
</div>
<div>
<input type='radio' name='answerSeven' id='answerSeven' value='B' required/>
<label for='answerSevenB'>set()</label>
</div>
<div>
<input type='radio' name='answerSeven' id='answerSeven' value='C' required/>
<label for='answerSevenC'>touch()</label>
</div>
</li>

<li>
<h3>The filesize() function returns the file size in ___________</h3>
<div>
<input type='radio' name='answerEight' id='answerEight' value='A' required/>
<label for='answerEightA'>bits</label>
</div>
<div>
<input type='radio' name='answerEight' id='answerEight' value='B' required/>
<label for='answerEight'>bytes</label>
</div>
<div>
<input type='radio' name='answerEight' id='answerEight' value='C' required/>
<label for='answerEightC'>kilobytes</label>
</div>
</li>

<li>
<h3>Which of the following type of variables <br>are special variables that hold references<br> 
to resources external to PHP (such as database connections)?</h3>
<div>
<input type='radio' name='answerNine' id='answerNine' value='A' required/>
<label for='answerNineA'>Strings</label>
</div>
<div>
<input type='radio' name='answerNine' id='answerNine' value='B' required/>
<label for='answerNineB'>Resources</label>
</div>
<div>
<input type='radio' name='answerNine' id='answerNine' value='C' required/>
<label for='answerNineC'>Arrays</label>
</div>
</li>

<li>
<h3>Which of the following function is used to get length of a string?</h3>
<div>
<input type='radio' name='answerTen' id='answerTen' value='A' required/>
<label for='answerTenA'> strlen()</label>
</div>
<div>
<input type='radio' name='answerTen' id='answerTen' value='B' required/>
<label for='answerTenB'>length</label>
</div>
<div>
<input type='radio' name='answerTen' id='answerTen' value='C' required/>
<label for='answerTenC'>size()</label>
</div>
</li>

</ol>

<br><br><center><input class='button2'type='submit' value='Submit Quiz'/>
<br></br>

</form>";

?>
<br><br><br><br><br>


<p>Created by:<br>Antonio,Geraldine<br>
Bambalan,Mac John Paul<br>
Bergonia,Mary Rose<br>
Ebuenga,Camille<br>
Mariano,Alyssa</p><br><br>
	</body>
</html>