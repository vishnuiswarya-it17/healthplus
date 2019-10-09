<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
      width: 20%;
      padding: 10px 10px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 3px 3px;
      margin: 2px 0;
      border: none;
      cursor: pointer;
      width: 5%;
    }




    .imgcontainer {
      text-align: left;
      margin: 24px 0 12px 0;
    }

    img.nurse {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 4px;
    }



    /* Change styles for span and cancel button on extra small screens */
  </style>
</head>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<body>
  <center>
    <h2> RECEPTIONIST LOGIN</h2>
  </center>

  
    <center style='color:red'><?php echo isset($_GET['error']) ? $_GET['error'] : ''; ?></center>

 


  <form method="post" action="nurselogincheck.php">
    <CENTER> <img src="nurse.jpg"></CENTER>


    <div class="container">
      <center> <label for="uname"><b>Patientid</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <br></center>&nbsp;&nbsp;&nbsp;

      <center> <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br> </center>&nbsp;&nbsp;

      <center><button type="submit"a href="meera.php">Login</button></center>
      <label></a>

      </label>
    </div>


    <center><span class="psw">Forgot <a href="#">password?</a></span></center>
    </div>
  </form>

</body>

</html>