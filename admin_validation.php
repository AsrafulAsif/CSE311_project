
        <?php
            session_start();
            include("connection.php");
            $username=$_POST['user'];
            $pass=$_POST['password'];
            $s="SELECT *FROM admin WHERE username='$username' && password='$pass'";
            $result=mysqli_query($conn,$s);
            $num=mysqli_num_rows($result);
            
            if($num == 1)
            {
              $_SESSION['admin']=$username;
              header('location:admin.php');
            }
            else{
                
               
                echo"User name or password incorrect!!";
                echo"<span><a href='admin_logIn.php'>go back</a></span>";
            
            }
    
                

        ?>