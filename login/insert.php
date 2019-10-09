<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="projectinformation"; // Table name 

// Connect to server and select database.
$conn=mysqli_connect($host, $username, $password,$db_name);
//mysqli_select_db($db_name)or die("cannot select DB");

// Get values from form 
$a=$_POST['Student_Name'];
$b=$_POST['Student_Rollno'];
$c=$_POST['Student_Mark'];                                  

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Student_Name,Student_Rollno , Student_Mark)VALUES('$a', '$b', '$c')";
//echo $sql;
$result=mysqli_query($conn,$sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
}

else {
echo "ERROR";
}
?>