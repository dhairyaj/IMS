<?php

   session_start();
      //connect to database
   $db = mysqli_connect("localhost", "root", "qwerty", "authentication");
   
   if(isset($_POST['login_btn'])) {
      
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, hash('sha512', $_POST['password']));
      
     //hash password before storing for secuirty purposes
      $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

      if(mysqli_num_rows(mysqli_query($db, $query)) > 0) {
        
        echo "<script> alert('Successfully logged in!');";
        echo "location.href='page1.php'; </script>";

      } else {

          echo "<script> alert('Username or password do not exist!'); </script>";

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

    <title>Login</title>

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
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
     </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
   <p>Not an authorised person ! <a href="register.php"><u>Register</u></a></p>
</form>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>