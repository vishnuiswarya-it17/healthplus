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
      width: 200%;
      padding: 18px;
      border: 1px solid ;
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
      background-color: ;
      color: white;
      padding: 8px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      </center>
    }

    input[type=submit]:hover {
      background-color: ;
    }

    .container {
      border-radius: 5px;
      background-color: red;
      padding: 50px;

    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
      color: white;
      font-size: 20px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
      font-size: 20px;
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
  <center><h2> GENERATED PATIENT DETAILS</h2>
  </center>
<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form><BR>
  <div class="container">
 

<center>
  <textarea rows="7" cols="20">"PATIENT ID:  <?php echo $patientid; ?>  PATIENT NAME: <?php echo $patientname; ?> AGE:<?php echo $age; ?>                    BLOODGROUP: <?php echo $bloodgroup; ?>                         GENDER: <?php echo $gender; ?> ADDRESS:<?php echo $address; ?></textarea>
</center>

<form action="details.php" method="POST">
      <div class="row">
        <div class="col-25">
          <center> <label for="fname">PATIENT ID:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $patientid; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center>&nbsp&nbsp&nbsp <label for="lname">PATIENT NAME:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $patientname; ?>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <center> <label for="lname">AGE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $age; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center>&nbsp&nbsp&nbsp <label for="bloodgroup">BLOOD GROUP:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $bloodgroup; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center> <label for="gender">GENDER:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $gender; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <center><label for="address">ADDRESS:</label> </center>
        </div>
        <div class="col-75">
          <?php echo $address; ?>
        </div>
        
      </div>
      <div class="row">
        <br><br><br>

      </div>
<div align="center"><br><br>
<a href="login.html" class="previous">&laquo; Previous</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="prescription.html" class="next">Next &raquo;</a>

</div>
</body>
</html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #000000;
  color: white;
}

.next {
  background-color: #000000;
  color: white;
}

</style>
</head>
</html>





  </div>
  </center>
  </form>
  </div>

</body>


</head>
<body>










</body>
</html>

