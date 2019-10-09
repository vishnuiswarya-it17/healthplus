<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="userdetail"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['email'];
$b=$_POST['password'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(email,password)VALUES('$a', '$b')";
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