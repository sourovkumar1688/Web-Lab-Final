<?php
 
session_start();
  
    //Database Code Gose here
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'lab_final');

    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($db == FALSE){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//End


if($_SERVER['REQUEST_METHOD'] == "POST")
{
 //Username and Password sent from Form
 $username = mysqli_real_escape_string($db, $_POST['username']);
 $password = mysqli_real_escape_string($db, $_POST['password']);
 $password = md5($password);

  //var_dump($username,$password);

 $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
 $query = mysqli_query($db, $sql);
 $res=mysqli_num_rows($query);

 
 
 //If result match $username and $password Table row must be 1 row
 if($res == 1)
 {
 header("Location: welcome.php");
 }
 else
 {
 echo "Invalid Username or Password";
 }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Login</title>
</head>
<body>
      <div class="container">
          <div class="card col-6 mx-auto">
            <div class="card-header">
               <h3>USER SIGNIN FORM</h3>
            </div>
            <div class="card-body">
                  <form action="six.php" method="post">
                  <label for="Username">UserName</label>
                  <div class="input-group mb-3">
                  <input type="text" required class="form-control ml-2" name="username">
                  </div>

                  <label for="Username">Password</label>
                  <div class="input-group mb-3">
                  <input type="password" required class="form-control ml-2" name="password">
                  </div>

                  <div class="input-group mb-3">
                  <input type="submit" value="Login" name="login" class="btn btn-success">
                  </div>
                  </form>
                  <a href="signup.php">Have No Account?SignUp</a>
            </div>
           </div>
      </div>
</body>
</html>