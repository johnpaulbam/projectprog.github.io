<?php
/*
-------------------------------------------------------------------------------
Script Name: UsersFeedback.php
Author: 
Description: The page to sign in or to register record in the database
-------------------------------------------------------------------------------
*/ 
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
.content {
	background-color: #99f3bd;
	width: 1000px;
	height: auto;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 2px solid grey;
	float:left;
}
.gallery li {
      display: inline-block;
      padding: 10px;
	  float: left;
    }
.gallery li img {
      max-width: 200px;
	  height:200px;
	  float:center;
	  margin-top:30px;
	   margin-top:30px;
	  margin-left: 15px;
	  
    }
.content {
	width: 95%;
	height: auto;
	margin-right:20px;
	margin-left:20px
	
}
.content p {
	text-align:left;
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

<center><h1>About Us</h1><center>
	<ul class="gallery">
	<div class="content">
	  <li><img src="bam.png" alt=""></li>
		<p><b>Name: </b> Mac John Paul Bambalan        <b style="margin-left:180px">Expertise:</b> Python, C++, PHP, HTML</p>
		<p><b>Birthdate:</b> June 24, 2000             <b style="margin-left:230px">Strengths:</b> Creating codes for Phone apps and computer programs.</p>                                                    
		<p><b>Age: </b> 20</p>                                                
		<p><B>Gender: </b> Male</p>
		<p><b>Address: </b> 2375 Havana St. Sta Ana Manila    <b style="margin-left:150px">“Technology is best when it brings people together.”</b></p>
		<p><b> Email: </b> macjohnpaul.bambalan@my.jru.edu    <b style="margin-left:250px">- Matt Mullenweg</b></p>
		<p><b>Contact No: </b> 09555875743</p>
		<p style="margin-left:235px;"><b>Nationality: </b> Filipino</p>

	  </div>
	  
	<div class="content">
	  <li><img src="deyn.png" alt=""></li>
	  <p><b>Name: </b> Geraldine A. Antonio           <b style="margin-left:200px">Expertise:</b> HTML, JAVA, Functionality, Information Management</p>
	  <p><b>Birthdate: </b> Febuary 13, 2000           <b style="margin-left:200px">Strengths:</b>Technical Writer who generates different kinds of technical documents.</p>
	  <p><b>Age: </b> 20</p>
	  <p><b>Gender: </b> Female     <b style="margin-left:360px">“It's not a faith in technology. It's faith in people.”</b><p>
	  <p><b>Address: </b> Blk 10 Lot 8 Villa Annapolis Bulacan City   <b style="margin-left:280px">- Steve Jobs</b></p>
	  <p><b>Email: </b> Geraldine.A.Antonio@gmail.com
	  <p><b>Contact No: </b> 09976001449
      <p style="margin-left:235px;"><b>Nationality: </b>Filipino
	  </div>
	  
	  	<div class="content">
	  <li><img src="aly.jpg" alt=""></li>
	  <p><b>Name: </b>Alyssa Denise Mariano            <b style="margin-left:170px">Expertise:</b> Cloud Services, PHP, SQL, JavaScript</p>
      <p><b>Birthdate: </b>July 08, 2000               <b style="margin-left:210px">Strengths:</b>HTML expert, finding errors and solving problems.</p>         
      <p><b>Age: </b> 20</p>
      <p><b>Gender: </b>Female    <b style="margin-left:300px">“Technology like art is a soaring exercise of the human imagination.”</b></p>
      <p><b>Address: </b> 158 Sto. Niño St. Pineda Pasig City       <b style="margin-left:280px">– Daniel Bell</b></p>
      <p><b>Email: </b> alyssadenise.mariano@my.jru.edu
      <p><b>Contact No: </b> 09368457138
      <p style="margin-left:235px;"><b>Nationality: </b> Filipino</p>
	  </div>
	  
	  	<div class="content">
	  <li><img src="cams.png" alt=""></li>
	  <p><b>Name: </b> Camille Loranne M. Ebuenga       <b style="margin-left:130px">Expertise:</b> Interaction Design, MYSQL, HTML, Web Design</p>
	  <p><b>Birthdate: </b> July 22 1999                <b style="margin-left:210px">Strengths:</b> Productivity Software, or software built to help work get done quicker </p>
	  <p><b>Age: </b>21                                 <b style="margin-left:390px"> </b> and more effectively. This includes word processing, spreadsheet and <p/>
	  <p><b>Gender: </b>Female                          <b style="margin-left:420px"></b> presentation applications, most commonly.</p> 
	  <p><b>Address: </b>Blk 1 Lot 73 Lancaster Cavite City </p>
	  <p><b>Email: </b>camille14ebuenga@gmail.com       <b style="margin-left:120px">“It is only when they go wrong that machines remind you how powerful they are.”</b> </p>
	  <p><b>Contact No.: </b> 09368695433               <b style="margin-left:390px">– Clive James</b></p>
	  <p style="margin-left:235px;"><b>Nationality: </b> Filipino</p>
	  </div>
	  
	  	<div class="content">
	  <li><img src="mary.png" alt=""></li>
	  <p><b>Name: </b>Mary Rose P. Bergonia             <b style="margin-left:200px">Expertise:</b> Cloud Systems, HTML, JAVA, Autocad</p>
	  <p><b>Birthdate: </b>September 26, 1999           <b style="margin-left:195px">Strengths:</b> Web designer good at planning and creating draft design.</p>
	  <p><b>Age: </b>21</p>
      <p><b>Gender: </b>Female                          <b style="margin-left:330px">“The advance of technology is based on making it fit in so that</b></p>
      <p><b>Address: </b>2101 road 10 NDC Compound Sta Mesa Manila    <b style="margin-left:70px"> you don't really even notice it, so it's part of everyday life.”</b></p>
      <p><b>Email: </b>bergoniamaryrose@gmail.com       <b style="margin-left:360px">–Bill Gates</b></p> 
	  <p><b>Contact No: </b> 09451127331 ,/p>
	  <p style="margin-left:230px;"><b>Nationality: </b>Filipino</p>
	  </div>
	</ul>
