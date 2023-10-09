<!-- index.php -->
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
  <link rel="stylesheet" href="css/order.css">
  <style>
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
  </style>
</head>

<body>
<section id="header">
            <div class="item header-container">
                <div class="header-item1">
                    <a href="index.php">
                        <img id="label1" src="images/Tim_Hortons-Advert.png" alt="label">
                    </a>  
                </div>
                <div class="header-item2">
                    <a href="order_history.php">
                        <input type="button" id="order_history" class="other-button" value="Order History">
                    </a>
                    <a href="Log-out.php">
                        <input type="button" value="Log Out" class="other-button">
                    </a>
                </div>
            </div>
   </section>
  <br>
 <div class="main-container">
    <div class="tims-cup">
        <img id="cup1" src="images/Cup_Tim_Hortons.png" alt="advert-cup">
      </div>
      <div class="para">
        <p id="AdLabel">Brewed Coffee</p>
       <p id="price">Price: $ <span id="myPrice"></span></p>
      </div>
      <form action="order1.php" method="post" name="orderform">
        <div class="form-container">
            <div class="container">
                <div class="item1"><label class="labels">Select Quantity:</label></div>
                <div class="item1 ">
                  <div class="counter-container">
                    <input type="button" value="-" id="decrement-button"  class="counter-button">
                    <input type="number" id="quantity" value="0"  name="quantity" min="0" max="100">
                    <input type="button" value="+" id="increment-button"  class="counter-button">
                  </div>
                  <span id="err-quantity" style ="padding-left:83px; padding-top:5px; color:red; font-weight:bold; font-size:10px;"></span>
                </div>
                <div class="item1"><label class="labels">Select Coffee Size:</label></div>
                <div class="item1" >
                    <select id="coffee-size" class="boxes2" name="size" required>
                        <option value="-1" disabled selected>Choose Size</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                        <option value="Extra-Large">Extra-Large</option>
                    </select>
                    <span id="err-size" style ="padding-left:83px; padding-top:5px; color:red; font-weight:bold; font-size:10px;"></span>
                </div>
                <div class="item1">
                    <label class="labels">Select Coffee Type:</label>
                </div>
                <div class="item1">
                    <select id="coffee-blend" name="blend" class="boxes2">
                      <option value= "-2" disabled selected>Choose Blend</option>
                      <option value= "Dark-Roast">Dark-Roast</option>
                      <option value= "Original-Blend">Original-Blend</option>
                      <option value= "Decaf">Decaf</option>
                    </select>
                    <span id="err-blend" style ="padding-left:83px; padding-top:5px; color:red; font-weight:bold; font-size:10px;"></span>
                </div>
                <div class="container2">
                    <div>
                        <input type="button" value="Black" class="buttons" id="btn1">
                      </div>
                      <div>
                        <input type="button" value="Regular" class="buttons" id="btn2">
                      </div>
                      <div>
                        <input type="button" value="Double-Double" class="buttons" id="btn3">
                      </div>
                      <div>
                        <input type="button" value="Triple-Triple" class="buttons" id="btn4">
                      </div>
                    </div>
                    <div class="item1">
                        <label class="labels">Number Of Sugar:</label>
                    </div>
                    <div class="item1">
                        <input type="number" id="sugar" name="sugar" min="0" max="20" class="boxes">  
                    </div>
                    <div class="item1">
                        <label class="labels">Number Of Cream:</label>
                    </div>
                    <div class="item1">
                        <input type="number" id="cream" name="cream" class="boxes" min="0" max="20">
                    </div>
                    <div class="item1">
                        <label class="labels">Number Of Milk:</label>
                    </div>
                    <div class="item1">
                        <input type="number" id="milk" name="milk" min="0" max="20" class="boxes">
                    </div> 
                    <div class="container3">
                        <input type="submit" id="btn10" value="Place Order">
                    </div>
                </div>
              </div>
        </div>
      </form>
 </div>
 <script>
//   const orderScript=()=> {
//   const orderForm = {
//     quantityBox: document.getElementById("quantity"),
//     milkBox: document.getElementById("milk"),
//     creamBox: document.getElementById("cream"),
//     sugarBox: document.getElementById("sugar"),
//     Btns: document.querySelectorAll(".buttons"),
//   };
//   const updateContent = (milkValue, creamValue, sugarValue) => {
//     orderForm.milkBox.value = milkValue;
//     orderForm.creamBox.value = creamValue;
//     orderForm.sugarBox.value = sugarValue;
//   };
//   const buttonHandler = (getClickedBtn) => {
//     if (Number(orderForm.quantityBox.value) < 1) {
//       orderForm.quantityBox.value = 1;
//       if (getClickedBtn === "black") {
//         console.log("udating eachtime")
//         updateContent(0, 0, 0);
//       } else if (getClickedBtn === "regular") {
//         console.log("udating eachtime")
//         updateContent(1, 1, 1);
//       } else if (getClickedBtn === "double-double") {
//         console.log("udating eachtime")
//         updateContent(2, 2, 2);
//       } else if (getClickedBtn === "triple-triple") {
//         console.log("udating eachtime")
//         updateContent(3, 3, 3);
//       }
//     }
//   };
//   orderForm.Btns.forEach((options) => {
//     options.addEventListener("click", function () {
//       const btnClicked = this.value.toLowerCase();
//       buttonHandler(btnClicked);
//     });
//   });
// };
// orderScript();

  var decrementButton = document.getElementById('decrement-button');
  var incrementButton = document.getElementById('increment-button');
  var quantityContainer = document.getElementById('quantity');
  var price = parseFloat(document.getElementById("myPrice").innerHTML);
  decrementButton.onclick = function()
   {
      var quantity = parseInt(quantityContainer.value);
      var sizeSelected = document.getElementById("coffee-size").value;
      if (quantity > 1)
       {
          quantityContainer.value = quantity - 1;
       }
       if(sizeSelected === "-1")
        {
            price = 0.00;
        }
       else if (sizeSelected === "Small") 
        {
            price = (1.23 * quantityContainer.value).toFixed(2);
        } 
        else if (sizeSelected === "Medium") 
        {
            price = (1.59 * quantityContainer.value).toFixed(2);
        } else if (sizeSelected === "Large")
        {
            price = (1.79 * quantityContainer.value).toFixed(2);
        } 
        else if (sizeSelected === "Extra-Large") 
        {
            price = (2.10 * quantityContainer.value).toFixed(2);
        } else 
        {
            price = 0.00;
        }
        document.getElementById("myPrice").innerHTML = price;
      };

incrementButton.onclick = function() {
  var quantity = parseInt(quantityContainer.value);
  var sizeSelected = document.getElementById("coffee-size").value;
  quantityContainer.value = quantity + 1;
  if(sizeSelected === "-1")
  {
    price = 0.00;

  }
  else if (sizeSelected === "Small") {
    price = (1.23 * quantityContainer.value).toFixed(2);
  } else if (sizeSelected === "Medium") {
    price = (1.59 * quantityContainer.value).toFixed(2);
  } else if (sizeSelected === "Large") {
    price = (1.79 * quantityContainer.value).toFixed(2);
  } else if (sizeSelected === "Extra-Large") {
    price = (2.10 * quantityContainer.value).toFixed(2);
  }

  document.getElementById("myPrice").innerHTML = price;
};
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btn4 = document.getElementById("btn4");
  
    btn1.addEventListener("click", function() {
      var quantity = parseInt(quantityContainer.value);
      if(quantity<1)
      {
        document.getElementById("quantity").value = 1;
      }
      document.getElementById("milk").value = 0;
      document.getElementById("cream").value = 0;
      document.getElementById("sugar").value = 0;
    });
  
    btn2.addEventListener("click", function() {
      var quantity = parseInt(quantityContainer.value);
      if(quantity<1)
      {
        document.getElementById("quantity").value = 1;
      }
      document.getElementById("milk").value = 1;
      document.getElementById("cream").value = 1;
      document.getElementById("sugar").value = 1;
    });
  
    btn3.addEventListener("click", function() {
      var quantity = parseInt(quantityContainer.value);
      if(quantity<1)
      {
        document.getElementById("quantity").value = 1;
      }
      document.getElementById("milk").value = 2;
      document.getElementById("cream").value = 2;
      document.getElementById("sugar").value = 2;
    });
  
    btn4.addEventListener("click", function() {
      var quantity = parseInt(quantityContainer.value);
      if(quantity<1)
      {
        document.getElementById("quantity").value = 1;
      }
      document.getElementById("milk").value = 3;
      document.getElementById("cream").value = 3;
      document.getElementById("sugar").value = 3;
    });
    var size = document.getElementById("coffee-size");
    size.addEventListener("click", function() 
    {
      var sizeSelected = document.getElementById("coffee-size").value;
      var quantity = parseInt(quantityContainer.value);
      if(sizeSelected === "-1")
      {
        price = 0.00;

      }
      else if (sizeSelected === "Small") {
        price = (1.23 * quantityContainer.value).toFixed(2);
      } else if (sizeSelected === "Medium") {
        price = (1.59 * quantityContainer.value).toFixed(2);
      } else if (sizeSelected === "Large") {
        price = (1.79 * quantityContainer.value).toFixed(2);
      } else if (sizeSelected === "Extra-Large") {
        price = (2.10 * quantityContainer.value).toFixed(2);
      }
      document.getElementById("myPrice").innerHTML = price;
    });
    
   document.orderform.onsubmit = function()
   {
       return validator();
   }
   function validator()
   {
      var isValid = true;
      var quantity = parseInt(quantityContainer.value);
      var sizeSelected = document.getElementById("coffee-size").value;
      var blendSelected = document.getElementById("coffee-blend").value;
      var errQuantity = document.getElementById("err-quantity");
      var errSize = document.getElementById("err-size");
      var errBlend = document.getElementById("err-blend");
      errQuantity.innerHTML ="";
      errSize.innerHTML = "";
      errBlend.innerHTML = "";
      if(blendSelected=="-2")
      {
        errBlend.innerHTML="<b>Please select a coffee blend</b>"
        isValid=false;
      }
      
      if (quantity < 1 || isNaN(quantity)) {
        errQuantity.innerHTML = "<b>Please select a valid quantity</b>";
        var isValid = false;
      }
  
      if (sizeSelected === "-1") {
        errSize.innerHTML = "<b>Please select a coffee size</b>";
         var isValid = false;
      }

      
  
      return isValid;

      
   };
 </script>