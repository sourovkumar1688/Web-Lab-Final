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

$sql = "SELECT id,name,username,age FROM user";
     $result = mysqli_query($db,$sql);
     $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
     
 
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Lab Test</title>
 </head>
 <body>
     <div class="container">
             <div class="card">
                 <div class="card-header">
                        <h3>User table</h3>
                 </div>
                 <div class="card-body">
                        <table class="table">
                          <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Username</th>
                                   <th>Action</th>
                               </tr>
                          </thead>
                          <tbody>
                                  <?php
                                   foreach ($rows as $row){
                                       ?>

                                       <tr>
                                           <td><?php echo $row['id']?></td>
                                           <td><?php echo $row['name']?></td>
                                           <td><?php echo $row['username']?></td>
                                           <td>
                                               <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                           </td>
                                       </tr>

                                    <?php   
                                   }
                                  ?>
                          </tbody>
                        </table>
                 </div>
             </div>
     </div>
 </body>
 </html>