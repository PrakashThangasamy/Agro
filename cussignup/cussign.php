<?php
   
    $user=$_POST['user'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    if (!empty($user) ||  !empty($pass) || !empty($phone) )
    {
        
        $host="localhost";
        $username="root";
        $password="";
        $dbname="agro";
        //connection
        $con=new mysqli($host,$username,$password,$dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
          }
        else
        {
            $SELECT = "SELECT user From customersignup Where user = ? Limit 1";
            $INSERT = "INSERT Into customersignup (user,phone,pass )values(?,?,?)";
            //Prepare statement
            $stmt = $con->prepare($SELECT);
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $stmt->bind_result($user);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            //checking username
            if ($rnum==0) 
            {
                $stmt->close();
                $stmt = $con->prepare($INSERT);
                $newuser=$user."tb";
                $sql="CREATE TABLE $newuser(proimg VARCHAR(210),proname VARCHAR(100),price INT,quantity INT,farmer_name VARCHAR(100),id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id))";
                $result=mysqli_query($con,$sql) or die("BAD CREATE:$sql");
                $stmt->bind_param("sss", $user,$phone,$pass);
                $stmt->execute();
                header("Location:../cuslogin/cuslogin.php?error=none");

            }
             else 
             {
                //Someone already register using this username
                header("Location:cussignup.php?user=exist");
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
?>