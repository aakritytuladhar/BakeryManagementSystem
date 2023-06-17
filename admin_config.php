<?php
    session_start();
   
    require('dbconfig.php');
    $user_name=$_POST['al_username'];

    $password=$_POST['al_password'];
    $sql="Select * from admin_login where al_username='$user_name' && al_password='$password'";
    $result= mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
		 {
            $_SESSION['name']=$user_name;
			header("location:dashboard.php");
		 }
		 else
		 {
            ?>
            <!-- <script>
                function message(){
                    alert("Incorrect Username or Password");
                }
            </script> -->
            <?php

            header("location:admin.php");
			 
		 }
		?>