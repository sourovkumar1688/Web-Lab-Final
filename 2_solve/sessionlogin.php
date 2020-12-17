<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
     <div class="container">
           <h2><?php echo$_SESSION['userlogin']; ?></h2>
           <a href="two.php" class="btn btn-primary">Login</a>
     </div>
</body>
</html>