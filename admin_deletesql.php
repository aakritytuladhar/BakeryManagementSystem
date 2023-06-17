<?php
if(isset($_POST['delete'])){
    $al_id=$_POST['al_id'];

    require('dbconfig.php');
    
    $sql="delete from admin_login where al_id=$al_id";
    // $result= mysqli_query($con,$sql);
    if(mysqli_query($con,$sql))
		 {
			$_SESSION['delete']="Successfully recorded";
			header("location:admin_manage.php");
		 }
		 else
		 {
			 echo "error while insering record".mysqli_error($con);
			 
		 }
		 mysqli_close($con);
		
  } 
  else if(isset($_POST['update'])){
    header("location:take3.php");

  }
		
  
?>
   

