<?php 
 session_start();

 
    require('dbconfig.php');
    $user_name= $_SESSION['name'];
    $sql="SELECT * from new_cart,item,customer_order_detail where login_name='$user_name' && new_cart.i_id=item.i_id &&  new_cart.cus_id=customer_order_detail.cus_id";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Order Status</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  
</head>
<body>
<?php include('nav.php');?>
    <div class="main-content">
        <div class="admin">
            <h1> Order </h1>
           
        <br/>  

        
            <table class="tbl-full">
                <tr>
                    <th> Order ID</th>
                    <th> Image</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th>Quantity </th>
                    <!-- <th>Customer name </th> -->
                    <!-- <th>Customer email </th> -->
                    <th>Customer Phone </th>
                    <th> Customer address </th>
                    <th>Date</th>
                    <th> Status </th>
                    

                    
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
                                
                              
                                 <td> <?php echo $row['cus_phn']?></td>
                                 <td> <?php echo $row['date_time']?></td>

                                 <td> <?php echo $row['cus_address']?></td>

                                 
                                 <td>
                                 <select name="order"  class="btn-danger ">
                                    <option value="Status">Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Shipping">Shipping</option>
                                    <option value="Delievery">Delivery</option>

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
    require('footer.php');
?>