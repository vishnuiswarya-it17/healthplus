<?php
if ($_POST) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "meera";
  // $tbl_name = "details";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {



    $id = $_POST['uname'];
    $password = $_POST['psw'];


    if ($id == '') {
      echo "<script>alert('enter the name')</script>";
    }
    if ($password == '') {
      echo "<script>alert('enter the paasword')</script>";
    }

    $sql = " SELECT Patientid,pass FROM details WHERE Patientid = '$id' AND pass ='$password' ";

    $result = mysqli_query($conn, $sql);
    $row  = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {

      header("location: meera.php");
    } else {
      header("Location: nurselogin.php?error=INVALID CREDENTIALS");
      echo $count;
      die();
    }
  }
}
