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
    row-gap:30px;
}
.container
{
    display:grid;
    grid-template-columns: auto;
    justify-self:center;
    background-color:white;
    justify-content:center;
    width:50%;
    height:700px;
}
/* Header container start*/
.header-container
{
    display:grid;
    grid-template-columns: 70% 30%;
    background-color:  rgb(212, 8, 28);
    height: 100px;
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
.btn10 {
  border-color: white;
  width: 360px;
  border-radius: 30px;
  color: white;
  padding: 15px 5px;
  text-decoration: none;
  font-size: 16px;
  background-color:  rgb(212, 8, 28);
  font-weight: bold;


}
.btn10:hover {
  color:rgb(212, 8, 28);
  width: 370px;
  background-color: white;
  border:2px solid rgb(212, 8, 28);
}   
.item1
{
    display:grid;
    grid-template-columns:85% 8%;
   
    justify-self:center;
    font-family: 'Times New Roman', Times, serif;
    margin-left:2%;
    font-size:22px;
    color:brown;
    height:45px;
    padding-left:3%;
}

.item2
{
    display:grid;
    justify-content:center;
    margin-bottom:30px;
    align-content:start;
}
#Phone_Cup
{
    height:100%;
    width:550px;
}
.item3
{
    display:grid;
    grid-template-columns:auto;
    justify-self:center;
    margin:0px 0px 50px 5px;
}
#check-mark
{
    align-self:center;
    height:50px;
    width:30;
    margin-right:2%;
}
h3{text-align:center;color:tomato; font-size:21.5px;height:25px;}
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
    <div class="container">
        <div class="item1">
        <h1>Order Sucessfull</h1>
        <img id="check-mark" src="images/check-mark3.png">
        
        </div>
        <h3 id="header-appreciation">Thank you!!! <?php echo $_SESSION['uname'] ?> for your order.</h3>
        <div class="item2">
            <img id="Phone_Cup" src="images/Phone_Cup_Advert4.png" alt="Phone_Cup">
        </div>
        <div class="item3">
            <a href="order.php">
                <input type="button" class="btn10" value="Place Order">
            </a>
            <a href="receipt.php">
                <input type="button" value="View receipt" class="btn10">
            </a>
        </div>
      
    </div>
  
<div>
</body>
</html>