
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
    width:30%;
}
/* Header container start*/
.header-container
{
    display:grid;
    grid-template-columns: 70% 30%;
    background-color:  rgb(212, 8, 28);
    height: 100px;
    
}
h1
{
    font-family: 'Times New Roman', Times, serif;
    font-style:Italic;
    text-align:center;
    font-size:26px;
    color: rgb(212, 8, 28);
    height:0px;

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
#order-history
{
    display: grid;
    background:white;
    width:70%;
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
}
#btn10:hover {
  color:rgb(212, 8, 28);
  width: 350px;
  background-color: white;
  border:2px solid rgb(212, 8, 28);
}   
h3{text-align:center;color:brown; font-size:18px;}
td{margin-left:30px;}
table,th,td{border:2px solid black}
td{text-align:center;color:rgb(212, 8, 28);}

.no-history
{
    display:grid;
    grid-template-columns: auto;
    justify-self:center;
    background-color:white;
    justify-content:center;
    margin-top:30px;
    width:40%;
    height:490px;
    border:2px solid rgb(212, 8, 28);
}
#cart
{
    height:310px;
    width:300px;
}
#no-history-h3{text-align:center;color:brown;height:10px;};
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
                    <a href="order.php">
                        <input type="button" id="Place-Order" class="other-button" value="Place Order">
                    </a>
                    <a href="Log-out.php">
                        <input type="button" value="Log Out" class="other-button">
                    </a>
                </div>
            </div>
        </section>

    
     <div id="order-history">
     <h1> Order History</h1>
     <?php
        $emailTableName = preg_replace("/[^a-zA-Z0-9]+/", "", $_SESSION['email']);
        $tableName = $emailTableName . "_table";
        $query= "SELECT * FROM `$tableName` WHERE 1";
        $result= mysqli_query($conn, $query);
        /*
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
          `id`, `quantity`, `size`, `blend`, `sugar`, `cream`, `milk`, `bPrice`, `aPrice`, `date_time` 
        */ 

        if(mysqli_num_rows($result)>0)
        {
            echo "<h3>Hi ".$_SESSION['uname']. " , here is your order history:</h3>";
            echo "<table>";
            echo "<th>Order Number</th>";
            echo "<th>Quantity</th>";
            echo "<th>Size</th>";
            echo "<th>Blend</th>";
            echo "<th>Sugar</th>";
            echo "<th>Cream</th>";
            echo "<th>Milk</th>";
            echo "<th>Price Before Tax</th>";
            echo "<th>Price After Tax</th>";
            echo "<th>Date and Time</th>";
           
            while($res=mysqli_fetch_assoc( $result))
            {
                echo "<tr>";
                echo "<td>#".$res['id']."</td>";
                echo "<td>#".$res['quantity']."</td>";
                echo "<td>".$res['size']."</td>";
                echo "<td>".$res['blend']."</td>";
                echo "<td>#".$res['sugar']."</td>";
                echo "<td>#".$res['cream']."</td>";
                echo "<td>#".$res['milk']."</td>";
                echo "<td>$".$res['bPrice']."</td>";
                echo "<td>$".$res['aPrice']."</td>";
                echo "<td>".$res['date_time']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<div class='no-history'>";
            echo "<img id='cart'src='images/cart3.png'>";
            echo"<div>";
            echo "<H3 id='no-history-h3'>Hi ".$_SESSION['uname'].", you have no purchase history</h3>";
            echo "<p style='margin:0px 0px 30px 15px;color:brown;'>check back after you place your next order!</p>";
            echo "<a href='order_history.php'>";
            echo "<input type='button'  id='btn10' value='Refresh'>";
            echo "</a>";
            echo "</div>";
        }
     ?>
    </div>
</div>             
</body>
</html>