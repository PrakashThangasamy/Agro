<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/fruitsalid.png" type="image/x-icon">
    <title>Far Home</title>
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
                    <a href="">
                        <span class="material-icons-outlined">
                            spa
                            </span>
                    </a>
                </div>
                <div class="profile">
                    <a href="profile.php?tname=<?php echo $tablename;?>">
                        <span class="material-icons-outlined">
                            face
                            </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="sub-div">
            <div class="right-div">
            <?php
                $tablename=$_GET['tname'];
                $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM $tablename")or die($mysqli->error);
                while($row=$result->fetch_assoc()):?>
                <div class="orange">
                    <img src="../upload_image/<?php echo $row['filename']?>" class="fruit" alt="fruit">
                    <a href="process.php?Delete=<?php echo $row['id']?>&tname=<?php echo $tablename;?>" class="delete">
                        <span class="material-icons-outlined">
                        close
                        </span>
                    </a>
                    <h1 class="name"><?php echo strtoupper($row['proname']);?></h1>
                    <p class="price">₹<?php echo $row['perkg'];?>/kg</p>
                    <p class="weight">Stock-<?php echo $row['quantity'];?>kg</p>
                   <h2 class="rate">₹<?php echo $row['price'];?></h2>
                    <a href="proedit.php?edit=<?php echo $row['id']?>&tname=<?php echo $tablename;?>&fname=<?php echo $row['filename']?>" class="create">
                        <span class="material-icons-outlined">
                        create
                        </span>
                    </a>
                   
                </div>
                <?php endwhile;?>
                <?php
                    function pre_r($array)
                    {
                        echo'<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                ?>
                <div class="add">
                <a name="add1" href="addproduct.php?tname=<?php echo $tablename;?>&fname=upload/default/orange.png">
                        <span class="material-icons-outlined">
                            add
                            </span>
                </a>
                        <p>Add product
                        </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>