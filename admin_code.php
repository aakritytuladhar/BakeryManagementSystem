<?php 
    session_start();
    
    require('dbconfig.php');
  if(isset($_POST['update_admin'])){
    $al_id=mysqli_real_escape_string($con,$_POST['al_id']);
    $fullname=mysqli_real_escape_string($con,$_POST['fullname']);
    $username=mysqli_real_escape_string($con,$_POST['username']);

    $update_sql="UPDATE admin_login set al_fn='$fullname', al_username='$username' WHERE al_id='$al_id'";
    $result_update=mysqli_query($con,$update_sql);

    if($result_update){
    $_SESSION['message']="Admin Updated Successfully";
    header("location:admin_manage.php");

  }
  else{
    $_SESSION['message']="Admin Not Updated ";
    header("location:admin_manage.php");

    }
}
else if(isset($_POST['add_admin'])){
    $al_id=mysqli_real_escape_string($con,$_POST['al_id']);
    $fullname=mysqli_real_escape_string($con,$_POST['fullname']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $insert_sql="Insert into admin_login(al_username,al_password,al_fn) values('$username','$password','$fullname')";
    $result_insert=mysqli_query($con,$insert_sql);

    if($result_insert){
    $_SESSION['message']="Admin inserted Successfully";
    header("location:admin_manage.php");

  }
  else{
    $_SESSION['message']="Admin Not inserted ";
    header("location:admin_manage.php");

    }
}
else if(isset($_POST['admin_delete'])){
    $al_id=mysqli_real_escape_string($con,$_POST['al_id']);
   

    $delete_sql="Delete from admin_login where al_id=$al_id";
    $result_delete=mysqli_query($con,$delete_sql);

    if($result_delete){
    $_SESSION['message']="Admin Deleted Successfully";
    header("location:admin_manage.php");

  }
  else{
    $_SESSION['message']="Admin Not Deleted ";
    header("location:admin_manage.php");

    }
}
else if(isset($_POST['updatesql_item'])){
  $i_id=mysqli_real_escape_string($con,$_POST['i_id']);
  $name=mysqli_real_escape_string($con,$_POST['i_name']);
  $price=mysqli_real_escape_string($con,$_POST['i_price']);
  $quantity=mysqli_real_escape_string($con,$_POST['i_quantity']);
  $category=mysqli_real_escape_string($con,$_POST['i_category']);

  $filename=$_FILES["i_image"]["name"];
  $tempname=$_FILES["i_image"]["temp_name"];
  $folder=$filename;
  move_uploaded_file($tempname,$folder);

  $update_sql="UPDATE item set i_name='$name', i_price='$price',i_category='$category',i_quantity='$quantity',i_image='$folder' WHERE i_id='$i_id'";
  $result_update=mysqli_query($con,$update_sql);

//   $update_sql="Select * from item WHERE i_id='$i_id'";
//   $result_update=mysqli_query($con,$update_sql);
//  if (mysqli_num_rows($result_update)>0){
//   while($row=mysqli_fetch_array($result_update))
//   {

//   echo $row['i_name'];
//  }
 
  if($result_update){
   
  $_SESSION['message']="Item Updated Successfully";
  header("location:admin_item.php");
    }
  else{
      $_SESSION['message']="Item Not Updated ";
      header("location:admin_item.php");
  
      }
    
}
else if(isset($_POST['item_delete'])){
    $i_id=mysqli_real_escape_string($con,$_POST['i_id']);
    

    $delete_sql="Delete from item where i_id=$i_id";
    $result_delete=mysqli_query($con,$delete_sql);

    if($result_delete){
    $_SESSION['message']="Item deleted Successfully";
    header("location:admin_item.php");

  }
  else{
    $_SESSION['message']="Item Not deleted ";
    header("location:admin_item.php");

    }
}

else if(isset($_POST['admin_item_add'])){
  $i_id=mysqli_real_escape_string($con,$_POST['i_id']);
  $name=mysqli_real_escape_string($con,$_POST['i_name']);
  $price=mysqli_real_escape_string($con,$_POST['i_price']);
  $quantity=mysqli_real_escape_string($con,$_POST['i_quantity']);
  $category=mysqli_real_escape_string($con,$_POST['i_category']);

  
  $filename=$_FILES["i_image"]["name"];
  $tempname=$_FILES["i_image"]["temp_name"];
  $folder=$filename;
  move_uploaded_file($tempname,$folder);

  $insert_sql="Insert into item(i_name,i_price,i_quantity,i_image,i_category) values('$name','$price','$quantity','$folder','$category')";
    $result_insert=mysqli_query($con,$insert_sql);

    if($result_insert){
    $_SESSION['message']="Admin inserted Successfully";
    header("location:admin_item.php");

  }
  else{
    $_SESSION['message']="Admin Not inserted ";
    header("location:admin_item.php");

    }
}
else if(isset($_POST['delete'])){
  $c_id=mysqli_real_escape_string($con,$_POST['c_id']);

  $delete_sql="Delete from newcar where c_id=$c_id";
  $result_delete=mysqli_query($con,$delete_sql);

  if($result_delete){
  $_SESSION['message']=" Deleted Successfully";
  header("location:cart_manage.php");

}
else{
  $_SESSION['message']=" Not Deleted ";
  header("location:cart_manage.php");

  }

}

?>
