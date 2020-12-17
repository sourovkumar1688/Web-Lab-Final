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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Welcome</title>
</head>
<body>
<nav class="navbar bg-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> SIGNOUT</a></li>
    </ul>
  </div>
</nav>
<div class="container">
        <div class="card">
            <div class="card-header">
                   <h3>Register Users </h3>
            </div>
            <div class="card-body">
                <table class="table">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Name</th>
                             <th>Username</th>
                         </tr>
                     </thead>
                     <tbody>
                     <tbody>
                       <?php
                         foreach($rows as $row){
                             ?>
                             <tr>
                                 <td><?php echo $row['id']; ?></td>
                                 <td><?php echo $row['name']; ?></td>
                                 <td><?php echo $row['username']; ?></td>
                                
                             </tr>
                           <?php  
                         }
                       ?>  
                 </tbody>
                     </tbody>
                </table>
            </div>
        </div>
</div>
</body>
</html>