<?php 
 session_start();
    
    require('dbconfig.php');
    $sql="SELECT * from new_cart,item,customer_order_detail where new_cart.i_id=item.i_id &&  new_cart.cus_id=customer_order_detail.cus_id";
    $result=mysqli_query($con,$sql);

    if (isset($_GET['id']) && isset($_GET['status'])) {  
        $id=$_GET['id'];  
        $status=$_GET['status'];  
        mysqli_query($con,"update customer_order_detail set status='$status' where cus_id='$id'");  
        header("location:index.php");  
        die();  
   }  
   ?>  
   <!D
?>
<!DOCTYPE html>
<html>
<head>
	<title> Order Status</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/admin.css">
  
</head>
<body>
    <?php
require('admin_index.php');?>
<div class="main-content" style="margin-left:20rem; margin-top:1rem;">
        <div class="admin">
            <h1> Order </h1>
           
        <br/>  

        
            <table class="tbl-full">
                <tr>
                    <th> Customer ID</th>
                    <th> Image</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th>Quantity </th>
                    <th>Customer name </th>
                    <th>Customer email </th>
                    <th>Customer Phone </th>
                    <th> Customer address </th>
                    <th>Date</th>
                    <th> Status </th>
                    <th> Action <th>

                    
                </tr>
                <?php
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {

                 ?>
                            <tr>
                            <form name="HtmlForm" method="post" action=".php"  class="form">
                                 <td><?php echo $row['cus_id']?></td>
                                 <td><img src="images/<?php echo $row['i_image'] ?>" alt="" height="100px" width="100px"></td>
                                 <td> <?php echo $row['i_name']?></td>
                                 <td><?php echo $row['i_price']?></td>
                                 <td><?php echo $row['i_quantity']?></td>
                                 <td> <?php echo $row['cus_fn']?></td>
                                 <td> <?php echo $row['cus_email']?></td>
                                 <td> <?php echo $row['cus_phn']?></td>
                                 <td> <?php echo $row['date_time']?></td>

                                 <td> <?php echo $row['cus_address']?></td>
                                
                                 <td>
                                    <?php

                                        if($row['status']==1){
                                            echo "Pending";
                                        }
                                        elseif($row['status']==2){
                                            echo "Shipping";
                                        }
                                       else if($row['status']==3){
                                            echo "Delivery";
                                        }

                                    ?>
                                 </td>
                                 
                                 <td>

                                 <select name="order"  class="btn-danger " onchange="status_update(this.options[this.selectedIndex].value,'<?php $row['cus_id']?>')">
                                 <!-- <option value="Status">Status</option> -->
                                    <option value="1">Pending</option>
                                    <option value="2">Shipping</option>
                                    <option value="3">Delivery</option>

							        </select>
   
                                </td>
                                
                               
                <?php
                            }
                        }?>
                 </tr>
             </table>
        </div>
</div>
<?php 
    require('admin_footer.php');
?>
<script>
    function status_update(value,id){
        // alert(id);
        let url="admin_overview.php";
        window.location.href=url+"?"+id+"&status="+value;

    }
</script>