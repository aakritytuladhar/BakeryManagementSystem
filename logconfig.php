<?php
    session_start();
    $user_name=$_POST['username'];
    // $id=$_POST['id'];
    $password=$_POST['password'];
    require('dbconfig.php');
    
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    //echo $id;
    $sql="Select * from login where login_name='$user_name' AND login_password='$password'";
    $result= mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
		 {            
             $user_name=$_POST['username'];
           
            // $_SESSION
            // $sql="Insert  into new_cart (login_id) value('$user_id') ";
            // $result= mysqli_query($con,$sql);
            if(isset($_SESSION['name'])){
                $user_name=$_SESSION['name'];
                echo $user_name;
                header("location:cart_manage.php");
             }
            
		
		 }
		 else
		 {
        
            header("location:register.php");
			 
		 }
		?>


