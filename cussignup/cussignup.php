<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cussignup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/fruitsalid.png" type="image/x-icon">
    <script src="cussign.js"></script>
    <title>Customer Signup</title>
</head>
<body>
<?php 
        $user=$_GET['user'];
        if($user=='exist')
        {
            $display='block';
        }  
        else
            $display='none';
    ?>
    <div class="container">
        <div class="navigation">
            <img class="img" src="../img/logo.svg" alt="logo">
            <div class="nav-right">
                <div class="home">
                    <a href="../index.html">
                        <span class="material-icons-outlined">
                            home
                        </span>
                    </a>
                </div>
                <div class="spa">
                    <a href="../farlogin/farlogin.php?error=none">
                        <span class="material-icons-outlined">
                            spa
                            </span>
                    </a>
                </div>
                <div class="person">
                    <a href="../cuslogin/cuslogin.php?error=none">
                        <span class="material-icons-outlined">
                            person
                            </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="sub-div">
            <div class="left-div">
                <div class="heading">
                    <h1 class="h1">Online</h1>
                    <h1 class="h2">Farm</h1>
                    <h1 class="h3">products</h1>
                </div>
                <img src="../img/fruitsalid.png" alt="fruitsalid"class="img2">
            </div>
            <div class="right-div">
                <div class="login-div">
                    <p class="para">Create account,</p>
                    <div style="display:<?php echo $display;?>" class="error-div" id="error-div">
                        <p class="para3" id="para">
                        <?php    
                               if($user=='exist')
                               {
                                echo "User already found";
                               }
                        ?>
                        </p>
                    </div>
                    <div class="form">
                        <form action="cussign.php" method="POST" onsubmit="return validation()">
                            <div class="user1">
                                <span class="material-icons-outlined">
                                    person_outline
                                    </span>
                                    <input type="text" placeholder="Username" id="text" name="user">
                            </div>
                            <div class="tele">
                                <span class="material-icons-outlined">
                                    phones
                                    </span>  
                                <input type="telephone" placeholder="Phone"class="login" name="phone" id="phone">
                            </div>
                            <div class="lock">
                                <span class="material-icons-outlined">
                                    lock
                                    </span>
                                    <input type="password" placeholder="Password" id="pass" name="pass">
                                   
                            </div>
                            <div class="clock">
                                <span class="material-icons-outlined">
                                    lock
                                    </span>
                                    <input type="password" placeholder="Confirm password" id="cpass">
                            </div>
                            <button type="submit"><a href="farlogin/farlogin.php?error=none">Sign up</button>
                            <div class="button">
                                
                                <a href="../cuslogin/cuslogin.php?error=none">Already have an account?<b>login in</b></a>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>