<!DOCTYPE html>
<html>
<head>
<style>
* {
 <center>  box-sizing: border-box; </center>
}

 <center>input[type=text], select, textarea {
  width: 25%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical; </center>
}

label {
   <center>padding: 8px 8px 8px 0;
  display: inline-block; </center>
}

 <center>input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 8px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right; </center>
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
  .col-25, .col-75, input[type=submit] {
    width: 25%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<center><h2>PATIENT DETAILS</h2></center>
<div class="container">
  <form action=" " method="POST">
  <div class="row">
    <div class="col-25">
    <center>   <label for="fname">PATIENT_ID</label> </center>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="PATIENT_ID">
    </div>
  </div>
<div class="row">
    <div class="col-25">
    <center>   <label for="fname">PASSWORD</label> </center>
    </div>
    <div class="col-75">
      <input type="password" id="fname" name="PASSWORD">
    </div>
  </div>

<div class="row">
    <div class="col-25">
    <center>   <label for="fname">REPEAT PASSWORD</label> </center>
    </div>
    <div class="col-75">
      <input type="password" id="fname" name="psw_repeat">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <center> <label for="lname" >PATIENT_NAME</label> </center>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="PATIENT_NAME">
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <center> <label for="lname">AGE</label> </center>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="AGE">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <center> <label for="bloodgroup">BLOOD_GROUP</label> </center>
    </div>
    <div class="col-75">
      <select id="bloodgroup" name="BLOOD_GROUP">
        <option>A Positive</option>
<option>A Negative</option>
<option>A Unknown</option>
<option>B Positive</option>
<option>B Negative</option>
<option>B Unknown</option>
<option>AB Positive</option>
<option>AB Negative</option>
<option>AB Unknown</option>
<option>O Positive</option>
<option>O Negative</option>
<option>O Unknown</option>
<option>Unknown</option>
      </select>
    </div>
  </div>
<div class="row">
    <div class="col-25">
     <center> <label for="gender">GENDER</label> </center>
    </div>
    <div class="col-75">
      <select id="gender" name="GENDER">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>
  </div>
<div class="row">
    <div class="col-25">
     <center><label for="address">ADDRESS</label> </center>
    </div>
    <div class="col-75">
     <textarea id="address" name="ADDRESS"></textarea>
    </div>
  </div>
  <div class="row">
<br><br><br>
<input type="submit" value="Submit">
</form>

</form> 
  
</form>
</div>
  </div>
  </form>
</div>

</body>
</html>



<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nursedb";

$conn = new mysqli($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{



      $id = $_POST['PATIENT_ID'];
      $name = $_POST['PATIENT_NAME'];
      $age = $_POST['AGE'];
      $blood_group = $_POST['BLOOD_GROUP'];
      $gender = $_POST['GENDER'];
      $address =$_POST['ADDRESS'];
      $password = $_POST['PASSWORD'];
      $c_password = $_POST['psw_repeat'];
      if($password==$c_password)
	{
        }else{ echo'Incorrect password';}

      
$sql = "INSERT INTO ma(PATIENT_ID,PATIENT_NAME,AGE,BLOOD_GROUP,GENDER,ADDRESS,PASSWORD) VALUES ('$id','$name','$age','$blood_group','$gender','$address',' $password')";

$result=mysqli_query($conn,$sql);

if($result==1)
{

//header("location: sekar.php");

}
}
}
?>
