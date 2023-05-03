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
    <title>Profile Edit</title>
    <link rel="stylesheet" href="profileedit0.css">   
</head>
<body>
    <?php
    $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
    $tablename=$_GET['tname'];
    $fname=$_GET['fname'];
    if(isset($_GET['edit']))
    {
        $tablename=$_GET['tname'];
        $result=$mysqli->query("SELECT * FROM farmsign WHERE user='$tablename'")or die($mysqli->error);
        $row=$result->fetch_assoc();
    }
        if(isset($_POST['cancel']))
        {
            $tablename=$_GET['tname'];
            header("Location:profile.php?tname=$tablename");
        }
        if(isset($_POST['edit']))
        {
            $fname=$_GET['fname'];
            $tablename=$_GET['tname'];
            $loca1=$_POST['loca'];
            $loca=strtolower($loca1);
            $phone1=$_POST['phone'];
            $phone=strtolower($phone1);
            $mysqli->query("UPDATE  farmsign SET loc='$loca',phone='$phone',filename='$fname'WHERE user='$tablename'") or die($mysqli->error());
            header("Location:profile.php?edit&tname=$tablename");
        }
        if(isset($_GET['delete']))
        {
            echo "hai";
            $mysqli->query("UPDATE  farmsign SET filename='upload/avathar.jfif'WHERE user='$tablename'") or die($mysqli->error());
        }
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
                    <a href="">
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
                <form action="" method="post">
                    <div class="img">
                    <img src="../upload_image/<?php echo $fname?>  " alt="AVATHAR">
                    </div>
                    <div class="imgbutton">
                    <button type="button" class="upload"><a href="../upload_image/upload_img.php?edit&tname=<?php echo $tablename?>&location=farmhome/profileedit.php&fname=<?php echo $fname?>">UPLOAD</a> </button>
                        <button type="button" name="imgdel" class="delete"> <a href="profileedit.php?edit&tname=<?php echo $tablename?>&fname=upload/avathar.jfif">DELETE</a></button>
                    </div>
                    <div class="loca">
                        <span class="material-icons-outlined">
                        location_on
                        </span>  
                        <input type="text" value="<?php echo strtoupper($row['loc']);?>" name="loca"class="location">
                    
                    </div>
                    <div class="tele">
                        <span class="material-icons-outlined">
                        phones
                        </span>  
                        <input type="phone" value="<?php echo $row['phone'];?>"name="phone" placeholder="Enter No" class="no">
                    </div>
                     <div class="button">
                        <button type="submit" name="cancel" class="cancel">CANCEL</button>
                        <button type="submit" name="edit" class="edit">EDIT</button>
                    </div>
                </form>
                
            </div>
                    
        </div>
    </div>
</body>
</html>