<?php

   session_start();

   //connect to database
   $db = mysqli_connect("localhost", "root", "qwerty", "authentication");
   
   if(isset($_POST['register_btn'])) {
   	  
      $fname = mysqli_real_escape_string($db, $_POST['fname']);
      $lname = mysqli_real_escape_string($db, $_POST['lname']);
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $password = mysqli_real_escape_string($db, $_POST['password']);
      $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);

      echo $fname;

       if($password == $cpassword){

	       	$query = "SELECT `id` FROM `users` WHERE `email` = '$email' OR `username` = '$username'";

	       	if(mysqli_num_rows(mysqli_query($db, $query)) > 0) {
	       		echo "<script> alert('This email address or username is already linked with an account!'); </script>";
	       	} else {
	       		//create user
			    $password = hash('sha512', $password); //hash password before storing for secuirty purposes
			    $sql = "INSERT INTO users(fname, lname, username, email, password) VALUES('$fname','$lname','$username','$email','$password')";
			    mysqli_query($db, $sql);
			    $_SESSION['username'] = $username;
			    echo "<script> alert('Successfully registered!');";
			    echo "location.href='login.php'; </script>";
	       	}

	   } else {
	   	//fail
	   		echo "<script> alert('The two passwords do not match'); </script>";
	   }
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Register</title>

    <style type="text/css">
    	.abc{
    		text-align: center;
    		margin-top: 15px;
    		background-color: lightblue;
    		padding-top: 15px;
    		padding-bottom: 15px;
    	}
    </style>

  </head>
  <body>
    
<!-- Logo and NPCIL -->
<div class="container">  

  <div class="abc">
	  <p>Nuclear Power Corporation of India Limited</p>
  	  <p>Rajasthan Rawatbhata Site 1 to 6</p>
  </div>

<!-- login credintials -->
	
    <form method="post">
    <div class="form-group">
     <label for="fname">First Name</label>
     <input type="text" class="form-control" id="fname" name="fname">
    </div>
    <div class="form-group">
     <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
    <small id="userHelp" class="form-text text-muted">Minimum 5 characters. Use both lower and uppercase letters and special characters.</small>
  </div>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="cpassword"> Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary" name="register_btn">Register</button><br><br>
  <p>Already registered ! <a href="login.php"><u>Login</u></a></p>

</form>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>