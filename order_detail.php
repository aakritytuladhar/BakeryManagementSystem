<?php
    session_start();
  
    require('dbconfig.php');
    //  echo"hello";
    // if(isset($_POST['place_order'])){
        // echo"hi";
       
    $name=$_POST['name'];
    $contact=$_POST['mobile'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $date=$_POST['event_dt'];                                           
    $cod=$_POST['cod'];

    // echo $name;
    $insert_sql="Insert into customer_order_detail(cus_fn,cus_phn,cus_address,cus_email,date_time,cus_pay) values('$name','$contact','$address','$email','$date','$cod')";
    $result_insert=mysqli_query($con,$insert_sql);

    if($result_insert){
    $_SESSION['message']="Order has been done Successfully";
    header("location:order.php");

  }
  else{
    $_SESSION['message']="Couldn't place order";
     
    header("location:payment.php");
  }

// 
    ?>