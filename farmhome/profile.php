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
    <title>PROFILE</title>
    <link rel="stylesheet" href="profile.css">   
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
                    <a href="farhome.php?tname=<?php echo $tablename;?>">
                        <span class="material-icons-outlined">
                            spa
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
                    $result=$mysqli->query("SELECT * FROM farmsign WHERE user='$tablename'")or die($mysqli->error);
                    $row=$result->fetch_assoc();
                    if(isset($_POST['cancel']))
                    {
                        $tablename=$_GET['tname'];
                        header("Location:farhome.php?tname=$tablename"); 
                    }
                    if(isset($_POST['logout']))
                    {
                        header("Location:../farlogin/farlogin.php?error=none");
                    }
                ?>
                <form action="" method="post">
               <!-- <div class="img">
                    <img src="../upload_image/<?php echo $row['filename']?> " alt="AVATHAR">
                        
                </div>-->
               <div class="img">
                    <img src="images.jpeg" alt="AVATHAR">
                </div>
                <div class="name">
                    <p class="username"><?php echo strtoupper($tablename);?></p>
                </div>
                <div class="loca">
                    <span class="material-icons-outlined">
                        location_on
                        </span>  
                   <p class="location"><?php echo strtoupper($row['loc']);?></p>
                </div>
                <div class="summa">

                </div>
                <div class="tele">
                    <span class="material-icons-outlined">
                        phones
                        </span>  
                    <p class="phoneno"><?php echo $row['phone'];?></p>
                </div>
                <div class="button">
                    <!--<a href="profileedit.php?edit&tname=<?php echo $tablename;?>&fname=<?php echo $row['filename']?> ">EDIT PROFILE</a><br>-->
                    <button type="submit" class="cancel" name="cancel">CANCEL</button><br>
                    <button type="submit" class="logout" name="logout">LOG OUT</button>
                    
                </div>
                </form>
                
                
            </div>
                    
        </div>
    </div>
</body>
</html>