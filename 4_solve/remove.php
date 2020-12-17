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


$sql = "DELETE FROM user WHERE id=$id";
$query = mysqli_query($db,$sql);
if($query){
   header('Location:four.php');
   exit();
}else{
    echo "Something Went Wrong";
}


?>