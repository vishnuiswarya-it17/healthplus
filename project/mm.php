<?php
/*include 'connection.php';
extract($_POST);
$sql = "insert into details(Patientid,Patientname,Age,Bloodgroup,GENDER,ADDRESS) values ('$patientid','$patientname','$age','$bloodgroup','$gender','$address')";
$result = mysqli_query($conn,$sql);
echo $result;*/


require 'connection.php';
extract($_POST);

$password = $_POST['pass'];
$c_password = $_POST['passr'];
if ($password == $c_password) { } else {
  header('Location: meera.php?error=PASSWORD INVALID');
  die();
}

//echo json_encode($_POST);
$sql = "insert into details(Patientid,Patientname,Age,Bloodgroup,GENDER,ADDRESS,pass) values ('$patientid','$patientname','$age','$bloodgroup','$gender','$address','$pass')";
if (mysqli_query($conn, $sql)) {
  echo "Inserted Successfully";
} else {
  echo mysqli_error($conn);
}





?>

<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      <center>box-sizing: border-box;
      </center>
    }

    <center>input[type=text],
    select,
    textarea {
      width: 25%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
      </center>
    }

    label {
      <center>padding: 8px 8px 8px 0;
      display: inline-block;
      </center>
    }

    <center>input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 8px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      </center>
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 10px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 25px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 25px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 25%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <center>
    <h2>PATIENT DETAILS</h2>
  </center>
  <div class="container">
    <form action="mm.php" method="POST">
      <div class="row">
        <div class="col-25">
          <center> <label for="fname">PATIENT ID</label> </center>
        </div>
        <div class="col-75">
          <?php echo $patientid; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center> <label for="lname">PATIENT NAME</label> </center>
        </div>
        <div class="col-75">
          <?php echo $patientname; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center> <label for="lname">AGE</label> </center>
        </div>
        <div class="col-75">
          <?php echo $age; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center> <label for="bloodgroup">BLOOD GROUP</label> </center>
        </div>
        <div class="col-75">
          <?php echo $bloodgroup; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center> <label for="gender">GENDER</label> </center>
        </div>
        <div class="col-75">
          <?php echo $gender; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center><label for="address">ADDRESS</label> </center>
        </div>
        <div class="col-75">
          <?php echo $address; ?>
        </div>
      </div>
      <div class="row">
        <br><br><br>

      </div>
  </div>
  </form>
  </div>

</body>

</html>