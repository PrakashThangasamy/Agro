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
    <title>Add product</title>
    <link rel="stylesheet" href="addproduct1.css">
</head>
<body>
<?php
 $tablename=$_GET['tname'];
 $fname=$_GET['fname'];
    if(isset($_POST['save']))
    {   
        $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
        $taname=$_POST['taname'];
        $name=$_POST['proname'];
        $perkg=$_POST['priceperpeice'];
        $quantity=$_POST['total'];
        $price=$_POST['price'];
        $mysqli->query("INSERT INTO $taname(filename,proname,perkg,quantity,price) VALUES ('$fname','$name','$perkg','$quantity','$price')")or die($mysqli->error);
        header("Location:farhome.php?tname=$taname");
    }
    if(isset($_POST['cancel'])){
        $taname=$_POST['taname'];
        header("Location:farhome.php?tname=$taname");
    }
    ?>
    <div class="form">
        <form action="" method="post">
        <input type="hidden" value="<?php $tablename=$_GET['tname'];
                                    echo $tablename;?>" name="taname">
                <div class="img">
                    <img src="../upload_image/<?php echo $fname?>" alt="PROIMAGE">
                </div>
                <div class="imgbutton">
                <button type="submit" class="upload"><a href="../upload_image/upload_img.php?edit=none&tname=<?php echo $tablename?>&location=farmhome/addproduct.php&fname=<?php echo $fname;?>">UPLOAD</a> </button>
                <button type="submit" class="delete"><a href="addproduct.php?tname=<?php echo $tablename;?>&fname=upload/default/orange.png">DELETE</a></button>
                </div>
            <div class="prodetails">
                <input type="text"class="input" placeholder="Product name" name="proname">
                <input type="text" class="input" placeholder="eg-₹10/kg" name="priceperpeice">
                <input type="text" class="input" placeholder="eg-80kg" name="total">
                <input type="text" class="input" placeholder="eg-₹20" name="price">
                <div class="button">
                    <button class="cancel"type="submit" name="cancel">Cancel</button>  
                    <button class="save"type="submit" name="save">save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>