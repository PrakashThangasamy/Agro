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
    <link rel="stylesheet" href="proexpand.css">   
</head>
<body>
<?php
    $tablename=$_GET['tname'];
    $username=$_GET['uname'];
    $username=strtolower($username);
    if(isset($_POST['shopcart']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'agro') or die(mysqli_error($conn));
       $proid=$_POST['proid'];
       $result=$conn->query("SELECT * FROM $tablename WHERE id='$proid'")or die($conn->error);
       $row=$result->fetch_assoc();
       $productname=$row['proname']; 
       $price=$row['price'];
       $quantity=$_POST['cart-quan'];
        $newuser=$username."tb";
       $conn->query("INSERT INTO $newuser(proname,price,quantity,farmer_name) VALUES ('$productname','$price','$quantity','$tablename')")or die($conn->error);
    }
?>
    <div class="container">
        <div class="close">
            <a href="cushome.php?tname=<?php echo $username;?>" class="closeall">
            <span class="material-icons-outlined">
                    close
        </span>
            </a>
        
        </div>
        <div class="farinfo">
        <?php
        
            $tablename = $_GET['tname'];
            $conn = mysqli_connect('localhost', 'root', '', 'agro') or die(mysqli_error($conn));
            $result = mysqli_query($conn, "SELECT * FROM farmsign WHERE user='$tablename'") or die(mysqli_error($conn));
            $row = mysqli_fetch_assoc($result);
        ?>

            <div class="img">
                <img src="../img/avathar.jfif " alt="AVATHAR">
                    
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
            <div class="tele">
                <span class="material-icons-outlined">
                    phones
                    </span>  
                <p class="phoneno"><?php echo $row['phone'];?></p>
            </div>
        </div>
        <div class="subdiv">
                    <div class="right-div">
                    <?php
                             global $mysqli;
                            $tablename=$_GET['tname'];
                            $conn = mysqli_connect('localhost', 'root', '', 'agro') or die(mysqli_error($conn));
                            $result = $conn->query("SELECT * FROM $tablename")or die($conn->error);
                            while($row=$result->fetch_assoc()):?>
                            <div class="orange">
                            <form action="" method="post">
                                <img src="fruits/orange.jfif" class="fruit" alt="orange">
                                <input type="hidden" name="proid" value="<?php echo $row['id']?>">
                                <h1 class="name"><?php echo strtoupper($row['proname']);?></h1>
                                <p class="price">₹<?php echo $row['perkg'];?>/kg</p>
                                <p class="weight">Stock-<?php echo $row['quantity'];?>kg</p>
                               <h2 class="rate">₹<?php echo $row['price'];?></h2>
                               
                                   <p class="quan_word">Quantity(kg)</p>
                                    <input type="phone" class="cart_quan" name="cart-quan" value="10">
                               <button type="submit" name="shopcart">
                                <span class="material-icons-outlined">
                                    shopping_cart
                                </span>
                                </button>
                               </form>
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