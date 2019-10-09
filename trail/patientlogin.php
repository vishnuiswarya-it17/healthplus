<? php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "nursedb";
$tbl_name="patientdbs"; 


$conn = new mysqli($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{



      $id = $_POST['User'];
      $password = $_POST['Pass'];


if($id=='')
      {
      echo"<script>alert('enter the name')</script>";
    }
    if($password=='')
    {
    echo"<script>alert('enter the paasword')</script>";
  }
      
$sql = " SELECT PATIENT_ID,pas FROM ma WHERE PATIENT_ID = '$id' AND pas ='$password' ";

$result = mysqli_query($conn,$sql);
$row  =mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count==1)
{

header("location: froms.html");
}
else
{
echo'check the user name and password';
}
}
}
?>