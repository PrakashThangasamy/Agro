<?php
         if(isset($_POST['farsubmit']))
         {
          
            $host="localhost";
            $user="root";
            $password="";
            $db_name="agro";
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
             }  
            $username1 = $_POST['tableuser']; 
            $username=strtolower($username1);
            $password = $_POST['pass'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from farmsign where user = '$username' and pass = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "<h1> Login Sucessfull.</h1>"; 
                header("Location:../farmhome/farhome.php?tname=$username");
            }  
            else{  
                
                header("Location:farlogin.php?error=error");
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
 
         } 
        
    ?>