<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/fruitsalid.png" type="image/x-icon">
    <title>Customer Edit</title>
    <link rel="stylesheet" href="cusprofile2.css">   
</head>
<body>
<?php
    $tablename=$_GET['tname'];
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
                    <a href="cushome.php?tname=<?php echo $tablename;?>">
                        <span class="material-icons-outlined">
                           person
                            </span>
                    </a>
                </div>
                <div class="profile">
                    <a href="">
                        <span class="material-icons-outlined">
                            face
                            </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="subdiv">
            <div class="left-div">
            <?php
                    $tablename=$_GET['tname'];
                    $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM customersignup WHERE user='$tablename'")or die($mysqli->error);
                    $row=$result->fetch_assoc();
                    if(isset($_POST['logout']))
                    {
                        header("Location:../cuslogin/cuslogin.php?error=none");
                    }
                    if(isset($_POST['cancel']))
                    {
                        $tablename=$_GET['tname'];
                        header("Location:cushome.php?tname=$tablename");
                    }
                ?>
                <form action="" method="post">
                <div class="img">
                    <img src="../img/avathar.jfif " alt="AVATHAR">
                        
                </div>
                <div class="name">
                    <p class="username"><?php echo strtoupper($tablename);?></p>
                </div>
                <div class="phoneno">
                    <p class="no">8825581324</p>
                </div>
                <div class="button">
                    <button type="submit" class="cart" name="cart"> <a href="mycart.php?tname=<?php echo $tablename;?>">MY CART</a> </button><br>
                    <button type="submit" class="profile" name="profilet">PROFILE </button><br>
                    <button type="submit" class="cancel" name="cancel">CANCEL</button><br>
                    <button type="submit" class="logout" name="logout">LOG OUT</button>
                </div>
                </form>
                
                
            </div>
                    
        </div>
    </div>
</body>
</html>