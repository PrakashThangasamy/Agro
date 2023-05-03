<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cushome2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="../img/fruitsalid.png" type="image/x-icon">
    <title>Customer Home</title>
</head>
<body>
<?php
    $tablename=$_GET['tname'];
    $search=false;
    $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
    if(isset($_POST['searching']))
    {
        $search=true;
        $sname=$_POST['productname'];
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
                            person
                            </span>
                    </a>
                </div>
                <div class="profile">
                    <a href="cusprofile.php?tname=<?php echo $tablename;?>">
                        <span class="material-icons-outlined">
                            face
                            </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="sub-div">
            <div class="left-div">
               <div class="search">
                    <form action="" method="post">
                    
                            <input type="text" placeholder="Search.." id="search" name="productname">
                        <button type="submit" name="searching">
                            <span class="material-icons-outlined">
                                search
                                </span>
                        </button>
                    </form>
               </div>
            </div>
            <div class="right-div">
            <?php
            if($search==true)
            {
                $tablename=$_GET['tname'];
                $conn = mysqli_connect('localhost', 'root', '', 'agro') or die(mysqli_error($conn));

                $result=$mysqli->query("SELECT * FROM farmsign WHERE loc='$sname'")or die($mysqli->error);
            while($row=$result->fetch_assoc()):?>
            <div class="orange">
                <img src="../img/avathar.jfif" class="fruit" alt="orange">
                <h1 class="name"><?php echo strtoupper($row['user']);?></h1>
                <p class="price"><?php echo strtoupper($row['loc']);?></p>
                <p class="weight"><?php echo $row['phone'];?></p>
                <a href="productexpand.php?tname=<?php echo $row['user'];?>&uname=<?php echo $tablename?>" class="expand">
                <span class="material-icons-outlined">
                    open_in_full
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
            }
        ?>       
        </div>       
    </div>
</body>
</html>