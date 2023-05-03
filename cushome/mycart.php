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
    <title>Product view</title>
    <link rel="stylesheet" href="mycart.css">   
</head>
<body>
<?php
    $tablename=$_GET['tname'];
?>
    <div class="container">
        <div class="close">
            <a href="cushome.php?tname=<?php echo $tablename;?>" class="closeall">
            <span class="material-icons-outlined">
                    close
            </span>
            </a>
        </div>
        <div class="subdiv">
            <div class="wel-div">
                <p class="msg">WELCOME BACK <?php echo strtoupper($tablename) ;?>!</p>
            </div>
                    <div class="right-div">
                        <?php
                            $tablename=$_GET['tname'];
                            $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
                             $newuser=$tablename."tb";
                                $result=$mysqli->query("SELECT * FROM $newuser")or die($mysqli->error);
                            while($row=$result->fetch_assoc()):?>
                            <div class="orange">
                                <img src="fruits/orange.jfif" class="fruit" alt="orange">
                                <a href="process.php?Delete=<?php echo $row['id']?>&tname=<?php echo $tablename;?>" class="delete">
                                <span class="material-icons-outlined">
                                close
                                </span>
                                </a>
                                <h1 class="name"><?php echo strtoupper($row['proname']);?></h1>
                                <p class="price">₹<?php echo $row['price'];?>/kg</p>
                                <p class="weight">Stock-<?php echo $row['quantity'];?>kg</p>
                               <h2 class="rate">₹<?php echo $row['farmer_name'];?></h2>
                               
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
                    </div>
            </div>
</body>
</html>