<?php 
session_start();
require('dbconfig.php');

$sql="select * from admin_category";
$result=mysqli_query($con,$sql);
$sql2="select * from login";
$result2=mysqli_query($con,$sql2);
$sql3="select * from admin_login";
$result3=mysqli_query($con,$sql3);
$sql4="SELECT * from item ";
$result4=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/admin.css"> -->
</head>
<body>
    <?php
        require('admin_nav.php');
    ?>
<div class="main-content">
        <div class="admin">
            <h1 > DASHBOARD </strong></br>
            
            <div class="col-4  text-center  ">
                <h1> <?php $rowcount = mysqli_num_rows( $result );
                echo $rowcount  ;?></h1><br/>
              Number of Categories
            </div>

            <div class="col-4  text-center">
                <h1> <?php $rowcount2 = mysqli_num_rows( $result2 );
                echo $rowcount2  ;?></h1><br/>
                Number of User
            </div>

            <div class="col-4  text-center">
                <h1> <?php $rowcount3= mysqli_num_rows( $result3);
                echo $rowcount3 ;?></h1><br/>
                Number of Admin
            </div>

            <div class="col-4  text-center">
                <h1> <?php $rowcount4= mysqli_num_rows( $result4);
                echo $rowcount4 ;?></h1><br/>
             Number of Item
            </div>
            
        </div>
        <div class="clear-fix">
           </div>
    </div>
    <?php
        require('admin_footer.php');
    ?>
</body>
</html>