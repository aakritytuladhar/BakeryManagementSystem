<?php

session_start();

 require 'dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .row a:hover{
            background-color:none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" href="images/favicon.png" type="image/png">

    <title>Dashboard | KDI</title>
</head>
<body>
 <?php require('admin_index.php')?>
    <div class = "container-fluid px-4 w-75" style="margin-left:25rem; margin-top:4rem;">
        <h1 class="mt-4">
            Admin Panel
        </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row" style="a:hover{background-color:none;};">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Users
                    <?php
                            $count_users="SELECT * FROM login";
                            $count_users_result=mysqli_query($con,$count_users);
                            if($users_total = mysqli_num_rows($count_users_result)){
                                echo '<h4 class="mb-0">'.$users_total.'</h4>';
                            }
                            else{
                                echo '<h4 class="mb-0"> No Data</h4>';
                            }
                        ?>
                    </div>

                    
                    <div class="card-footer d-flex align-items-center justify-content-between">

                        <a href="usersList.php" class="small text-white stretched-link">View Details</a>
                        <div class="small text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                             </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Total Admin
                    <?php
                            $count_admin="SELECT * FROM admin_login";
                            $count_admin_result=mysqli_query($con,$count_admin);
                            if($admin_total = mysqli_num_rows($count_admin_result)){
                                echo '<h4 class="mb-0">'.$admin_total.'</h4>';
                            }
                            else{
                                echo '<h4 class="mb-0"> No Data</h4>';
                            }
                        ?>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">

                        <a href="bookingList.php" class="small text-white stretched-link">View Details</a>
                        <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Total Order
                    <?php
                            $count_order="SELECT * FROM customer_order_detail";
                            $count_order_result=mysqli_query($con,$count_admin);
                            if($order_total = mysqli_num_rows($count_order_result)){
                                echo '<h4 class="mb-0">'.$order_total.'</h4>';
                            }
                            else{
                                echo '<h4 class="mb-0"> No Data</h4>';
                            }
                        ?> 

                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">

                        <a href="messageList1.php" class="small text-white stretched-link">View Details</a>
                        <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">Total Products
                    <?php
                            $count_item="SELECT * FROM item";
                            $count_item_result=mysqli_query($con,$count_item);
                            if($item_total = mysqli_num_rows($count_item_result)){
                                echo '<h4 class="mb-0">'.$item_total.'</h4>';
                            }
                            else{
                                echo '<h4 class="mb-0"> No Data</h4>';
                            }
                        ?> 

                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">

                        <a href="packageList1.php" class="small text-white stretched-link">View Details</a>
                        <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg>
</div>
                    </div>
                </div>
            </div>
        </div>
    


    </div>
</body>
</html>
