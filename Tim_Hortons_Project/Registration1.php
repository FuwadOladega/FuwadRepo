<?php 
ob_start();
require_once 'connection.php';

$name  =  $_REQUEST['nameBox'];
$email = $_REQUEST['emailBox'];
 
$query= "SELECT email FROM users WHERE email ='$email';";
$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
    header('location:Register.php?msg=userexist');
    ob_end_flush();
    die();
}
else
{
     $emailTableName = preg_replace("/[^a-zA-Z0-9]+/", "", $email);
     $tableName = $emailTableName . "_table";
     $sqlTable = "CREATE TABLE $tableName (
          id INT(8) AUTO_INCREMENT PRIMARY KEY,
          quantity INT(8),
          size VARCHAR(30) NOT NULL,
          blend VARCHAR(30) NOT NULL,
          sugar INT(8),
          cream INT(8),
          milk INT(10),
          bPrice DECIMAL(10, 2),
          aPrice DECIMAL(10, 2),
          date_time VARCHAR(30) NOT NULL
      )";
      
      
      $resultTable = mysqli_query($conn, $sqlTable);
      if (!$resultTable) {
          header('location:Register.php?msg=fail');
          echo "Error creating table: " . mysqli_error($conn);
      }

   $query= "INSERT INTO `users`(`Name`, `email`) VALUES ('" . $name ."','" . $email . "');";
   $result= mysqli_query($conn,$query);
   if($result==1)
   {
        header('location:Sign-in.php?msg=success');
   }
   else
   {
        header('location:Register.php?msg=fail');
   }
}
?>
