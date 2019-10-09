<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="nursedb"; // Database name
$tbl_name="ma"; // Table name


// Connect to server and select database.
$conn=mysqli_connect($host, $username, $password)or die("cannot connect");
//mysqli_select_db($conn,$db_name)or die("cannot select DB");
//$link = mysqli_connect("","patientid","password");
// mysqli_select_db( $link,$db);
 

// Get values from form
$a=$_POST['uname'];
$b=$_POST['psw'];


// Insert data into mysql
$sql="INSERT INTO $tbl_name(patientid,password)VALUES('$a', '$b')";
echo $sql;
$result=mysqli_query($conn,$sql);

   
 

// A Query without any returned data
echo $query;
 $query= mysqli_query ("INSERT INTO table1 ('val1', 'val2')");
 // A Query with returned data
  $query = mysqli_query("SELECT * FROM `table1`");
 $result=mysqli_query($conn,$query);  


while ($row = mysqli_fetch_row($result)){
    foreach ($row as $field) {
       print "$field . ";
    }
    print "";
 }

mysqli_close($conn);

?>
