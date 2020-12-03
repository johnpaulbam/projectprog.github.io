<?php
/*
------------------------------------------------------------------------------------------------------
Script Name: mysql_connect.php
Author: <type your name>
Description: To connect to the MySQL server and database
------------------------------------------------------------------------------------------------------
*/

$username ='root';
$password= '';
$database = 'Project';



$conn = mysqli_connect("localhost",$username,$password,$database);

mysqli_select_db($conn, $database) or die ("Unable to select database");

?>