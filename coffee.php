<!DOCTYPE html>
<html>
<head>
	<title>Browniee & Coffee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">

</head>
<body>
<?php
         require ('dbconfig.php');

        require('nav.php');
    ?>
	<section class="mothersday">
        <!-- <div class="loginbox"> -->
         <div class="container"> 
            <h1 class="text-center">Browniee & Coffee</h1>
            <?php
           $select_products = mysqli_query($con, "SELECT * FROM `item` where i_category='brownie_coffee' and c_id=6 ");
           if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="cart_manage.php" method="post">
      <div class="card h-200"  style="width: 20rem ; height=50rem;">
      <img src="images/<?php echo $fetch_product['i_image'];?>" width="255px" height="250px" altr="error" style="width:100%">
            <h3 style="text-align:center"><?php echo $fetch_product['i_name']; ?></h3>
            <div class="price" style="text-align:center">Rs.<?php echo $fetch_product['i_price']; ?></div>
            
           
            <input type="hidden" name="i_image" value="<?php echo $fetch_product['i_image']; ?>">
            <input type="hidden" name="c_id" value="<?php echo $fetch_product['c_id']; ?>">
            <input type="hidden" name="i_id" value="<?php echo $fetch_product['i_id']; ?>">

           



            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>
                  <div class="clear-fix">
            </div>
        </div>          
        <!-- </div> -->
</section>
<?php
    require('footer.php');
?>
</body>
</html>