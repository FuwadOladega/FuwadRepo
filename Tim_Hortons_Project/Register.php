<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
    <style>
        #container-php
        {
            display: grid;
            color:red;
            max-width:90%;
            grid-template-columns:80% 10%;
            margin-left:5%;
            height:40px;
            background-color:#FFD1DC;
            align-items:center;
        }
        #para-php{padding-left:20px;}
        #btn-php
        {
            align-self:start;
            color:silver;
            background-color:#FFD1DC;
            border:none;
            font-size:18px;
            height:20px;
            font-weight:bold;
            padding-left:40px;
            padding-top:5px;
        }
        #btn-php:hover{color:black};
        .container-success
        {
            display: grid;
            border:2px solid black;
        }
        #para-success{padding-left:20px;}
        #btn-success
        {
            align-self:start;
            color:silver;
            background-color:#FFD1DC;
            border:none;
            font-size:18px;
            height:20px;
            font-weight:bold;
          
            padding-top:5px;
        }
        .policy{text-decoration:underline; color:black;}
        .policy:hover{text-decoration:underline; color:gray;}
       
        #btn-success:hover{color:black};
    </style>
</head>
<body>
    <div class="container">
        <div class="first-half-container">
            <div class="phone">
                <img id="advert" src="images/big_pics.png" >
            </div>
        </div>
        <div class="second-half-container">
            <div class="leaf-container">
                <a href="index.php">
                    <img src="images/leaf.png" id ="leaf-img" alt="timhortons-logo">
                </a>
            </div>
            <div class="form-container">
                <form action="Registration1.php" method="post" name="Registration" class="myform">
                    <a id="Sign-up" href="Register.php" style="padding-left:22px;">Sign Up</a>
                    <a id="Sign-in" href="Sign-in.php"  style="padding-left:150px;">Sign In</a>
                    <hr>
                    <br>
                    <input type="text" name="nameBox" class="boxes" id="name-box"  placeholder="First name *">
                    <span id="name-err"></span>
                    <br>
                    <br>
                    <input type="email" class="boxes" id="email-box" name="emailBox"  placeholder="Email address *">
                    <span id="email-err"></span>
                    <br>
                    <br>
                    <span id ="DOB" >Date of birth</span>
                    <br>
                    <br>
                    <label style="font-size:13px;margin-left:20px;">Optional information</label>
                    <input type="date" id="customer-dob">
                   <br>
                   <br>
                    <input type="checkbox" id="checkbox2" style="margin-left:18px;"><label style="margin-left:4px;">I want to receive special offers and other <label style="margin-left:38px;">information from Tim Hortons via email</label></label>
                    <br>
                    <br>
                    <input type="checkbox" id="checkbox1" style="margin-left:18px;">
                    <label>I agree to the following: 
                        <a href="https://www.timhortons.ca/privacy-policy" class="policy">Privacy Policy,</a>
                        <br>
                        <a href="https://www.timhortons.ca/terms-conditions-rewards" class="policy" style="margin-left:38px;">Tims Rewards Terms and Conditions,</a> 
                        <br><a href="https://www.timhortons.ca/terms-of-use" class="policy" style="margin-left:38px;">Terms of Service</a>
                    </label>
                    <br>
                    <span id="chk-err"></span>
                    <br>
                    <input type="submit" value="Create an Account" id="btn10">  
                    <?php 
                        if (isset($_REQUEST['msg']))
                        {
                            if ($_REQUEST['msg'] == "success")
                            {
                                echo "<div class='container-success'>";
                                echo "<p id='para-success'><strong>Success!</strong> New email was registered.</p>";
                                echo "<button id='btn-success'>x</button>";
                                echo "</div>";
                            }
                            else if ($_REQUEST['msg'] == "fail")
                            {
                                echo "<strong>Fail!</strong> New email was not registered.";
                            }
                            else if ($_REQUEST['msg'] == "userexist")
                            {
                                echo "<div id='container-php'>";
                                echo "<p id='para-php'><strong>Fail!</strong> This email already exists.</p>";
                                echo "<button id='btn-php'>x</button>";
                                echo "</div>";                                
                            }
                        }
                     ?>      
                </form>
            </div> 
        </div>
        </div>
    </div>
    <script>
        
        
      

    
    document.addEventListener("DOMContentLoaded", function() {
        var btn10 = document.getElementById("btn10");
        var form = document.forms["Registration"];

        form.onsubmit = function() {
            return validator();
        };

        function validator() {
            var isValid = true;

            var errNameMessage = document.getElementById("name-err");
            if (document.getElementById("name-box").value === "") {
                errNameMessage.innerHTML = "Name is a required field.";
                errNameMessage.style.color = "red";
                errNameMessage.style.fontSize = "10px";
                errNameMessage.style.marginLeft = "18px";
                isValid = false;
            } else {
                errNameMessage.innerHTML = "";
            }
            var errEmailMessage = document.getElementById("email-err");
            if (document.getElementById("email-box").value === "") {
                errEmailMessage.innerHTML = "Email is a required field.";
                errEmailMessage.style.color = "red";
                errEmailMessage.style.fontSize = "10px";
                errEmailMessage.style.marginLeft = "18px";
                isValid = false;
            } else {
                errEmailMessage.innerHTML = "";
            }
            var errMessage = document.getElementById("chk-err");
            if (!document.getElementById("checkbox1").checked || !document.getElementById("checkbox2").checked) {
                errMessage.innerHTML = "To register, you must accept the terms of service and privacy policy.";
                errMessage.style.color = "red";
                errMessage.style.fontSize = "10px";
                errMessage.style.marginLeft = "18px";
                isValid = false;
            } else {
                errMessage.innerHTML = "";
            }
            return isValid;
        };
        document.getElementById("btn-php").onclick=function()
        {
            document.getElementById('container-php').innerHTML="";
            document.getElementById('container-php').style.backgroundColor="white";
        };

       

    });
</script>



</body>
</html>