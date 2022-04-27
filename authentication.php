<?php      
    include('connection.php');  
    $username = $_POST['emaildb'];  
    $password = $_POST['passdb'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where email = '$username' and passw = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: index.php?");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

               ?>
        


