<?php 
    require('dbconfig.php');
    $sql="Select * from new_category";
    $result=mysqli_query($con,$sql);
    
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Special Occasion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
   

</head>

<body>



    <!--navbar section start-->
  <?php 
    require('nav.php');
    ?>

    <!--navbar section start-->
  
    <!--sub nav section end-->

    <section class="mothersday">
        <div class="loginbox">
         <div class="container"> 
            <h1 class="text-center">Special Occasion</h1>
           
             <?php
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {
                         ?>
                         <form method="post" action="spec_occ.php">          
                          <div class="card h-200"  style="width: 20rem ; height=50rem;">
                             <img src="images/<?php echo $row['c_image'];?>" width="120px" height="250px" altr="error" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $row['c_name']?></h4>
                                   
                                
                                <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">
                                <input type="hidden" name="c_name" value="<?php echo $row['c_name']; ?>">


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

    <!-- Footer section start -->
<?php 
    require('footer.php');
?>


</body>

</html>