<?php

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
  
  if(isset($_POST['add_user'])){

            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = md5($password);
            $age = $_POST['age'];

   
            
   //Data INsert Code is Here
   $sql = "INSERT INTO `user` ( `name`,  
   `username`, `password`,`age`) VALUES ('$name','$username',  
    '$password','$age')"; 
     $db->query($sql);
//End

   
   }



      

//Data Show Code is Here

    $select = "SELECT id,name,username,age FROM user";
    $result = mysqli_query($db,$select);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  

//End






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



 <div class="container">

 <div class="card col-md-6 mx-auto">

 <div class="card-header">
 </div>
  <div class="card-body">
  <form action="one.php" method="POST">
  <label for="basic-url" class="form-label">Name</label>
<div class="input-group mb-3">
  
  <input type="text" required class="form-control" name="name">
</div>
<label for="basic-url" class="form-label">UserName</label>
<div class="input-group mb-3">
  <input type="text" required class="form-control" name="username">
</div>

<label for="basic-url" class="form-label">Password</label>
<div class="input-group mb-3">
  <input type="password" required class="form-control" name="password">
</div>

<label for="basic-url" class="form-label">Age</label>
<div class="input-group mb-3">
  <input type="text" required class="form-control" name="age">
</div>

<div class="input-group mb-3">
   <input type="submit" value="submit" name="add_user" class="btn btn-success">
</div>
     
     </form>
  </div>
</div>


<br>
<br>


    <div class="card">
        <div class="card-header">
              <h3>User Table</h3>
        </div>
        <div class="card-body">
              <table class="table">
                 <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Age</th>
                 </tr>
                 </thead>
                 <tbody>
                       <?php
                         foreach($rows as $row){
                             ?>
                             <tr>
                                 <td><?php echo $row['id']; ?></td>
                                 <td><?php echo $row['name']; ?></td>
                                 <td><?php echo $row['username']; ?></td>
                                 <td><?php echo $row['age']; ?></td>
                             </tr>
                           <?php  
                         }
                       ?>  
                 </tbody>
              </table>
        </div>
    </div>

     
 </div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>