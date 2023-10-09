<?php
ob_start();
session_start();

require_once 'connection.php';

$email = $_REQUEST['emailBox'];

$query = "SELECT email, Name FROM users WHERE email ='$email';";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0)
{
    $row= mysqli_fetch_assoc($result);
    $email=$row['email'];
    $uname= $row['Name'];
    $_SESSION['email']=$email;
    $_SESSION['uname']= $uname;
    header('location:order.php?result=success');
    ob_end_flush();
    die();
}
else
{
    header('location:Sign-in.php?result=fail');
}
?>