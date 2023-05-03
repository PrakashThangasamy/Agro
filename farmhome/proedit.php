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
    <title>Pro Edit</title>
    <link rel="stylesheet" href="addproduct1.css">   
<body>
    <?php require_once'process.php'; 
    $taname=$_GET['tname'];
    $fname=$_GET['fname'];
        if(isset($_POST['cancel'])){
            $taname=$_GET['tname'];
            header("Location:farhome.php?tname=$taname");
        }
    ?>
    <div class="form">
        <form action="" method="post">
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <div class="img">
                    <img src="../upload_image/<?php echo $fname?>" alt="PROIMAGE">
                </div>
                <div class="imgbutton">
                <button type="submit" class="upload"><a href="../upload_image/upload_img.php?edit=<?php echo $_GET['edit']?>&tname=<?php echo $taname?>&location=farmhome/proedit.php&fname=<?php echo $row['filename'];?>">UPLOAD</a> </button>
                <button type="submit" class="delete"><a href="">DELETE</a></button>
                </div>
            <div class="prodetails">
                <input type="text" class="input" value="<?php echo $name;?>" placeholder="Product name" name="proname">
                <input type="text" class="input" value="<?php echo $perkg;?>" placeholder="eg-₹10/kg" name="perkg">
                <input type="text" class="input" value="<?php echo $quantity;?>" placeholder="eg-80kg" name="quantity">
                <input type="text" class="input" value="<?php echo $price;?>" placeholder="eg-₹20" name="price">
                <div class="button">
                    <button class="cancel"type="submit" name="cancel">Cancel</button>  
                    <button class="save"type="submit" name="edit">Edit</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>