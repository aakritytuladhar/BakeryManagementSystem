<?php 
    require('dbconfig.php');
    $sql="Select * from home";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
     require('nav.php');
     ?>
	<section class="mothersday">
        <div class="loginbox">
         <div class="container"> 
            <h1 class="text-center">Category</h1>
           
             <?php
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {
                        ?>
                        <form action="take3.php" method="post">
                          <div class="card h-200"  style="width: 20rem ; height=50rem;">
                             <img src="images/<?php echo $row['h_img'];?>" width="100px" height="200px" altr="error" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $row['h_name']?></h4>
                           
                                    <input type="hidden" name="h_category" value="<?php echo $fetch_product['h_category']; ?>">
                                    <input type="hidden" name="h_category" value="<?php echo $fetch_product['h_category']; ?>">
                                    <input type="submit" class="btn" value="Explore" name="explore">
                                            
                                </div>
                            </div>
                            </form>
                          <?php
                       }
                   }
               
                ?>   
           
                  <div class="clear-fix">
            </div>
        </div>          
        </div>
</section>
<?php
    require('footer.php');
?>
</body>
</html>