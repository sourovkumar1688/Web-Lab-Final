<?php
  $id = $_GET['id'];
  
  
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

$query = "SELECT * FROM user WHERE id = '$id'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];

    var_dump($name,$username,$age);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Form</title>
</head>
<body>
      <div class="container">
           <div class="card">
                <div class="card-header">
                      <h3>Edit User Info</h3>
                </div>
                <div class="card-body">
                <form action="edit.php?id=<?php echo $id?>" method="post">
  <label for="basic-url" class="form-label">Name</label>
<div class="input-group mb-3"> 
  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
</div>
<label for="basic-url" class="form-label">UserName</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">
</div>


<label for="basic-url" class="form-label">Age</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="age" value="<?php echo $row['age'];?>">
</div>

<div class="input-group mb-3">
   <input type="button" value="Update" name="add_user" class="btn btn-info">
   <a href="five.php" class="btn btn-primary" style="margin-left: 20px;">Back</a>
</div>
     
     </form>
                </div>
           </div>
      </div>
</body>
</html>