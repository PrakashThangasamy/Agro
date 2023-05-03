<?php
    $mysqli=new mysqli('localhost','root','','agro')or die(mysqli_error($mysqli));
    $id=0;
    $name=" ";
    $perkg=" ";
    $quantity=" ";
    $price=" ";
    if(isset($_GET['Delete']))
    {
        $taname=$_GET['tname'];
        $id=$_GET['Delete'];
        $mysqli->query("DELETE  FROM $taname WHERE id=$id") or die($mysqli->error());
        header("Location:farhome.php?tname=$taname");
    }
    if(isset($_GET['edit']))
    {
        $taname=$_GET['tname'];
        $id=$_GET['edit'];
        $result=$mysqli->query("SELECT * FROM $taname WHERE id=$id")or die($mysqli->error());
        if(count(array($result))==1)
        {
            $row=$result->fetch_array();
            $name=$row['proname'];
            $perkg=$row['perkg'];
            $quantity=$row['quantity'];
            $price=$row['price'];
        }
    }
    if(isset($_POST['edit']))
    {
        $taname=$_GET['tname'];
        $fname=$_GET['fname'];
        $id=$_GET['edit'];
        $name=$_POST['proname'];
        $perkg=$_POST['perkg'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $mysqli->query("UPDATE  $taname SET filename='$fname',proname='$name',perkg='$perkg',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error());
        header("Location:farhome.php?tname=$taname");
    }
?>