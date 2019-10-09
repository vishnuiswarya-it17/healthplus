<?php
 $db = "test";
 $link = mysql_connect("localhost", "patientid", "password");
 mysql_select_db($db, $link);


// A Query without any returned data
 mysql_query ("INSERT INTO `table1` ('val1', 'val2')");
 // A Query with returned data
  $query = mysql_query("SELECT * FROM `table1`");


while ($row = mysql_fetch_row($result)){
    foreach ($row as $field) {
       print "$field . ";
    }
    print "";
 }

mysql_close();

?>