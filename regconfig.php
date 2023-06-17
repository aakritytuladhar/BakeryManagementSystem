<?php
    $user_name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    require('dbconfig.php');
    
    $sql="Insert into login(name,password,email) values('$user_name','$password','$email')";
    // $result= mysqli_query($con,$sql);
    if(mysqli_query($con,$sql))
		 {
			echo"Successfully recorded";
			header("location:login.php");
		 }
		 else
		 {
			 echo "error while insering record".mysqli_error($con);
			 
		 }
		 mysqli_close($con);
		?>
     

