
<?php
   
    require ('nav.php');
    require ('dbconfig.php');

    
?>
<section class="mothersday">
        <!-- <div class="loginbox"> -->
         <div class="container"> 
            <h1 class="text-center">Special Cake </h1>
            
      
            <?php
           $select_products = mysqli_query($con, "SELECT * FROM `item` where i_category='special_cake' and c_id=4 ");
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
        <!-- </div>           -->
        </div>
</section>
<!-- custom js file link  -->

<?php
    
    require ('footer.php');
    
?>

</body>
</html>
