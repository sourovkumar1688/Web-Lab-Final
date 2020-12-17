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
     $_SESSION['userlogin'] = $username." You Are Successfully Login";  
     header("Location: sessionlogin.php");
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
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
     <div class="container col-6 mx-auto">
     <div class="card">
            <div class="card-header">
                  <h2>Login Form</h2>
            </div>
            <div class="card-body">
                  <form action="two.php" method="POST">
                  <label for="basic-url" class="form-label">Username</label>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username">
                    </div>

                    <label for="basic-url" class="form-label">Password</label>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password">
                    </div>

                    <div class="input-group mb-3">
                    <input type="submit" value="submit" name="add_user" class="btn btn-success">
                    </div>
                  </form>
            </div>
     </div>  
     </div>
</body>
</html>