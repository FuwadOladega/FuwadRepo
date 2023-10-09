<?php
$host  = 'localhost';
$user  = 'root';
$pswd  = '';
$dbase = 'timhortons';

$conn = mysqli_connect($host, $user, $pswd, $dbase);

if(empty($conn))
{
    die("connection failed".mysqli_connect_error());
}
?>

