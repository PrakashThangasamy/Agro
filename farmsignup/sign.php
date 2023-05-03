<?php
if(isset($_POST['submit1']))
{
    $textname1=$_POST['user'];
    $textname=strtolower($textname1);
    $textpass=$_POST['pass'];
    $textloc1=$_POST['loc'];
    $textloc=strtolower($textloc1);
    $textphone=$_POST['phone'];
    $fname='upload/avathar.jfif';
    if(!empty($texrtuser)|| !empty($textpass) || !empty($textloc) || !empty($textphone))
    {
        $host="localhost";
        $username="root";
        $password="";
        $dbname="agro";
        $con=new mysqli($host,$username,$password,$dbname);
        if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
          }
        else
        {
            $SELECT = "SELECT user From farmsign Where user = ? Limit 1";
            $INSERT = "INSERT Into farmsign (user,pass,loc,phone)values(?,?,?,?)";
            $stmt = $con->prepare($SELECT);
            $stmt->bind_param("s", $textname);
            $stmt->execute();
            $stmt->bind_result($textname);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            if ($rnum==0) 
            {
                $stmt->close();
                $stmt = $con->prepare($INSERT);
                $sql="CREATE TABLE $textname(filename VARCHAR(100),proname VARCHAR(100),perkg INT,quantity INT,price INT,id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id))";
                $result=mysqli_query($con,$sql) or die("BAD CREATE:$sql");
                $stmt->bind_param('sssi', $textname,$textpass,$textloc,$textphone);
                $stmt->execute();
                echo "New record inserted sucessfully";
                header("Location:../farlogin/farlogin.php?error=none");
            }
            else 
            {
                //Someone already register using this username
                header("Location:farsignup.php?user=exist");
            }
            $stmt->close();
            $con->close();
        }
    }
    else 
    {
        echo "All field are required";
        die();
    }
}
else{
    echo "hai";
}
    
?>