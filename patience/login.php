<?php
   include("config.php");
 session_start();
     $_SESSION['username']=$_POST['username']; 
   if($_SERVER["REQUEST_METHOD"] == "POST") {

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    
      $sql = "SELECT sid FROM rewards_user_details WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
    
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
                
         header("location:rewards.php");
      }else {
       
	 header("location:index.php");
      }
   }
?>