
<?php
require_once 'check_session.php';
?>
<?php

require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body
{
    background-color:#EFE5D8;
}
 .main-container
{
    display:grid;
    grid-template-columns: auto;
    background-color:#EFE5D8;
    row-gap:50px;
}
.conatiner
{
    background-color:white;

}
/* Header container start*/
.header-container
{
    display:grid;
    grid-template-columns: 70% 30%;
    background-color:  rgb(212, 8, 28);
    height: 100px;
    
}
h2
{
    font-family: 'Times New Roman', Times, serif;
    font-style:Italic;
    text-align:center;
    font-size:26px;
    color: rgb(212, 8, 28);
    height:10px;

}
#label1 {
    display: inline-grid;
    width: 500px;
    height: 180px;
    position: absolute;
    top: 8%;
    left: 70%;
    transform: translate(-50%, -50%);
    
  }
  #header-appreciation
  {
     font-family: 'Times New Roman', Times, serif;
     text-align:center;
     font-size:36px;
     color: rgb(212, 8, 28);
  }
  .header-item1
  {
    
     display: grid;
     justify-content: center;
     position: relative;
     align-content: start;
     
  }
  .header-item2
  {
     
     display: grid;
     align-content: center;
     justify-content: center;
     grid-template-columns: auto auto;
     column-gap:8px;
     height:100px;
     margin-bottom: 500px ;
  }
.other-button
{
    margin-right: 10px;
    border-radius: 30px;
    padding: 15px 5px;
    text-decoration: none;
    width: 160px;
    display: inline-block;
    font-size: 16px;
    background-color:  rgb(212, 8, 28);
    color: white;
    font-weight: bold;
    border-color: white;
}
.other-button:hover
{
    background-color:  white;
    color: rgb(212, 8, 28);
   
}
#receipt-order
{
    display: grid;
    background:white;
    width:40%;
    justify-self:center;
    align-self:center;
} 
#order-container{display: grid;justify-self:center;}
#btn10 {
  border-color: white;
  width: 330px;
  border-radius: 30px;
  color: white;
  padding: 15px 5px;
  text-decoration: none;
  font-size: 16px;
  background-color:  rgb(212, 8, 28);
  font-weight: bold;
  margin-left: 27%;

}
#btn10:hover {
  color:rgb(212, 8, 28);
  width: 350px;
  background-color: white;
  border:2px solid rgb(212, 8, 28);
}   
table
{
    width:100%;
   
}
td
{ border-bottom:1px solid silver;}
.para-table{padding-left:50px;font-weight:bold;}
.header-table{padding-left:50px; color: rgb(212, 8, 28);}
.header-price{color: rgb(212, 8, 28);font-weight:bold;}
    </style>
</head>
<body>
<div class="main-container">
<section id="header">
            <div class="item header-container">
                <div class="header-item1">
                    <a href="index.php">
                        <img id="label1" src="images/Tim_Hortons-Advert.png" alt="label">
                    </a>  
                </div>
                <div class="header-item2">
                    <a href="order_history.php">
                        <input type="button" id="Order-History" class="other-button" value="Order History">
                    </a>
                    <a href="Log-out.php">
                        <input type="button" value="Log Out" class="other-button">
                    </a>
                </div>
            </div>
        </section>
<?php
    $quantity = $_POST['quantity'];
    $size     = $_POST['size'];
    $blend    = $_POST['blend'];
    $sugar    = $_POST['sugar'];
    $cream    = $_POST['cream'];
    $milk     = $_POST['milk'];

    $orderNum = rand(70000,79999);
?>
    
     <div id="receipt-order">
     <h2> Order Summary</h2>
     <?php echo "<div id='order-container'><p><strong>Order Number: </strong>#$orderNum</p></div>";?>
     <?php
     if($size==="Small")
     {
         $beforeTax = number_format(($quantity * 1.23),2);
         $AfterTax  = number_format(($beforeTax +($beforeTax*13/100)),2);
     }
     else if($size==="Medium")
     {
         $beforeTax = number_format(($quantity * 1.59),2);
         $AfterTax  = number_format(($beforeTax +($beforeTax*13/100)),2);
     }
     else if($size==="Large")
     {
         $beforeTax = number_format(($quantity * 1.79),2);
         $AfterTax  = number_format(($beforeTax +($beforeTax*13/100)),2);
     }
     else if($size==="Extra-Large")
     {
         $beforeTax = number_format(($quantity * 2.10),2);
         $AfterTax  = number_format($beforeTax +($beforeTax*13/100),2);
     }
     echo "<table>";
     echo "<tr>";
     echo "<td><p class='para-table'>Number of cups      :</p></td>";
     echo "<td>$quantity</td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><p class='para-table'>Coffe size selected  : </p> </td>";
     echo "<td>$size</td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><p class='para-table'>Coffe blend selected   : </p> </td>";
     echo "<td> $blend</td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><p class='para-table'>Number of sugars per cup:</p> </td>";
     echo "<td>$sugar</td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><p class='para-table'>Number of creams per cup:</p> </td>";
     echo "<td>$cream</td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><p class='para-table'>Number of milk per cup  :</p></td>";
     echo "<td>$milk </td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><h3 class='header-table'>Price before taxes</h3></td>";
     echo "<td><span class='header-price'>$$beforeTax</span></td>"; 
     echo "</tr>";

     echo "<tr>";
     echo "<td><h3 class='header-table'>Price After taxes</h3></td>";
     echo "<td><span class='header-price'>$$AfterTax</span> </td>"; 
     echo "</tr>";
     echo "<tr style='margin:10px 0px; height:100px;'> ";
     echo "<td colspan='2'><a href='db-order.php'><button id='btn10'>Confirm Order</button></a></td>";
     echo "</tr>";
     echo "</table>";

     $_SESSION['orderNum']= $orderNum;
     $_SESSION['quantity']= $quantity;
     $_SESSION['size']  = $size;
     $_SESSION['blend'] = $blend;
     $_SESSION['sugar'] = $sugar;
     $_SESSION['cream'] = $cream;
     $_SESSION['milk']  = $milk;
     $_SESSION['beforeTax'] = $beforeTax;
     $_SESSION['AfterTax'] = $AfterTax;   
     ?>
     </div>
</div>             
</body>
</html>