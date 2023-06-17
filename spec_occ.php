<!DOCTYPE html>
<html>
<head>
	<title>Mothers Day</title>
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
	
            <?php
        @include 'dbconfig.php';
        
        if(isset($_POST['explore'])){
        
          $category_name=$_POST['c_name'];
           $product_id=$_POST['c_id'];
         ?>
          <section class="mothersday">
        <div class="loginbox">
         <div class="container"> 
            <h1 class="text-center"><?php echo $category_name ?></h1>
            <?php
           // $sql="select * from item where c_id ='$product_category'";
           $select_products = mysqli_query($con, "select * from item where c_id ='$product_id'");
           if(mysqli_num_rows($select_products) > 0){
              while($fetch_product = mysqli_fetch_assoc($select_products)){
                 
           ?>
          
        
           <form action="login.php" method="post">
           <div class="card h-200"  style="width: 20rem ; height=50rem;">
           <img src="images/<?php echo $fetch_product['i_image'];?>" width="255px" height="250px" altr="error" style="width:100%">
                 <h3><?php echo $fetch_product['i_name']; ?></h3>
                 <div class="price">Rs.<?php echo $fetch_product['i_price']; ?></div>
                 
                
                 <input type="hidden" name="i_image" value="<?php echo $fetch_product['i_image']; ?>">
                 <input type="hidden" name="c_id" value="<?php echo $fetch_product['c_id']; ?>">
                 <input type="hidden" name="i_id" value="<?php echo $fetch_product['i_id']; ?>">
                 
        
   
                 <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
              </div>
           </form>
        
           <?php
                 }
              };
           };
        
   
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
<?php

