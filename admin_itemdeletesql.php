<?php
if(isset($_POST['delete'])){
    $i_id=$_POST['i_id'];

    require('dbconfig.php');
    
    $sql="delete from item where i_id=$i_id";
    // $result= mysqli_query($con,$sql);
    if(mysqli_query($con,$sql))
		 {
			$_SESSION['delete']="Successfully recorded";
			header("location:admin_item.php");
		 }
		 else
		 {
			 echo "error while deleting record".mysqli_error($con);
			 
		 }
		 mysqli_close($con);
		
  } 
  else if(isset($_POST['update'])){
    header("location:take3.php");

  }
		
  
?>
   

