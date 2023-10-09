<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-in.css">
    <title>Sign-In</title>
    <style>
        #err-msg
        {
            color:red;
            font-size:10px;
            margin-left:18px;
        }
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
                <form class="myform" action="Sign-in1.php" method="post">
                    <a id="Sign-up" href="Register.php" style="padding-left:22px;">Sign Up</a>
                    <a id="Sign-in" href="Sign-in.php"  style="padding-left:150px;;">Sign In</a>
                    <hr>
                    <br>
                    <input type="email" class="boxes" placeholder="Email address *" name="emailBox" required>
                    <?php
                    if(isset($_REQUEST['result']))
                    {
                        if($_REQUEST['result'] == "fail")
                        {
                            echo "<p id='err-msg'>This user does not exist</p>";
                        }
                    }
                    ?> 
                    <br>
                    <br>
                    <input type="submit" value="Sign In" id="btn10">       
                </form>
        </div>
    </div>
</body>
</html>