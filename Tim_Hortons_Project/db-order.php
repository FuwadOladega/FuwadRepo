<?php
require_once 'check_session.php';
?>
<?php
require_once 'connection.php';
?>
<?php
$orderNum  = $_SESSION['orderNum'];
$quantity  = $_SESSION['quantity'];
$size      = $_SESSION['size'];
$blend     = $_SESSION['blend'];
$sugar     = $_SESSION['sugar'];
$cream     = $_SESSION['cream'];
$milk      = $_SESSION['milk'];
$beforeTax = $_SESSION['beforeTax'];
$AfterTax  = $_SESSION['AfterTax'];
date_default_timezone_set('America/Toronto');
$currentDT = date('r');


$emailTableName = preg_replace("/[^a-zA-Z0-9]+/", "", $_SESSION['email']);
$tableName = $emailTableName . "_table";

$query= "INSERT INTO `$tableName`(`id`, `quantity`, `size`, `blend`, `sugar`, `cream`, `milk`, `bPrice`, `aPrice`, `date_time`) VALUES ($orderNum,$quantity,'$size','$blend',$sugar,$cream,$milk,$beforeTax,$AfterTax,'$currentDT')";
$result = mysqli_query($conn,$query);

if($result==1)
   {
        header('location:thank-you.php');
   }
   else
   {
        echo "order not inserted!!!";
   }

?>