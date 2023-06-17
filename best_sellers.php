<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>best sellers</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--jss file-->
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
  .bakery{

    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/wallpaper.jpg) ;
    background-attachment:fixed;  
    background-size :contain;
    /* /* background-repeat:no-repeat; */
    background-position:100%; 
  }
  .bakery h1{
     color:black;
  }
  </style>
  </head>
  <body>
    <section class="bakery ">
      <div class="container">
        <h1 class="text-center text-color:black;">Best Sellers</h2>
        <div class="menu">
             <?php             
                  $select_products = mysqli_query($con, "SELECT * FROM `item` where i_category='best_sellers' and c_id=7 ");
                     if(mysqli_num_rows($select_products) > 0){
                         while($fetch_product = mysqli_fetch_assoc($select_products)){
               ?> 
                           <form action="login.php" method="POST">
                                 <div class="card h-250" style="width: 30rem ;">
                                    <img src="images/<?php echo $fetch_product['i_image'];?>" width="255px" height="250px" altr="error" style="width:100%">
                                    <h3> <?php echo $fetch_product['i_name']; ?> </h3>
                                    <div class="price">Rs. <?php echo $fetch_product['i_price']; ?> </div>
                                    <input type="hidden" name="i_image" value="
                                                                     <?php echo $fetch_product['i_image']; ?>">
                                    <input type="hidden" name="c_id" value="
                                                                        <?php echo $fetch_product['c_id']; ?>">
                                    <input type="hidden" name="i_id" value="
                                                                           <?php echo $fetch_product['i_id']; ?>">
                                    <input type="submit" class="btn-1" value="Add to cart" name="add_to_cart">
                                 </div>
                              </form> 
               <?php
                        };
                   };
               ?> 
            <div class="clear-fix"></div>
        </div>
       </div>
    </section>
  </body>
</html>