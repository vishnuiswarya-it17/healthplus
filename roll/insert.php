<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select database.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['name'];
$b=$_POST['rollno'];
$c=$_POST['mark'];                                  

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, rollno, mark)VALUES('$a', '$b', '$c')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
}

else {
echo "ERROR";
}
?>