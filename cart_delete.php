<?php 
    session_start();
    
   
    require('dbconfig.php');

    $_SESSION['cart_id'] = $_POST['cart_id'];
    $delete= $_SESSION['cart_id'];

    $delete_sql="DELETE FROM new_cart WHERE cart_id= $delete";
    $result_delete=mysqli_query($con,$delete_sql);

    if($result_delete){
    $_SESSION['message']="Item Deleted Successfully";
    echo $_SESSION['message'];
  //  header("location:cart_manage.php");

  }
  else{
    $_SESSION['message']="Item Not Deleted ";
    echo $_SESSION['message'];

    // header("location:cart_manage.php");

    }
    ?>