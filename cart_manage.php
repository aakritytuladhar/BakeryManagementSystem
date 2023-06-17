<?php
session_start();
@include 'dbconfig.php';
 $user_name= $_SESSION['name'];

// echo $user_name;
// if(isset($_SESSION['name'])){
//      $user=$_SESSION['name'];
//      //echo $user;  
     
// }

if(isset($_SESSION['category']) && (isset($_SESSION['item']))){    
    $category=$_SESSION['category'];
    $item=$_SESSION['item'];
    
  

   $select_cart ="SELECT * FROM `new_cart` WHERE i_id='$item' And login_name='$user_name'";
   $result=mysqli_query($con,$select_cart);
   if(mysqli_num_rows($result) > 0){
       $message='Product already added to cart';
    //    echo $message;
   }
   else{

       $sql_insert=mysqli_query($con,"insert into new_cart (c_id,i_id,login_name) values('$category','$item','$user_name')" );
       $message[]='Product added to cart successfully';
// echo 'there';
   
   }
}


    

?>

<!DOCTYPE html>
 <html>

 <head>
  <title>Cart</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
   

</head>
<body>



    <!--navbar section start-->
     <?php
			require('nav.php');
	?>

<!--      sub nav section end -->

   <body>
        <section class="page-section" id="menu">
            <div class="container">
                <div class="row">
                   <div class="col-lg-8">
                       <div class="sticky">
                          <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-8"><b>Orders</b></div>
                                       <div class="col-md-4 text-right"><b>Total</b></div>
                                    </div>
                               </div>
                           </div>
                      </div>

                       <?php 
                $total=0;
             //   $get = $con->query("SELECT * from new_cart,item where new_cart.i_id=item.i_id");
              $get = $con->query("SELECT * FROM `new_cart`,item WHERE login_name='$user_name' AND new_cart.i_id=item.i_id");
                // $cart_result=mysqli_query($con,$cart);
                while ($row=$get->fetch_assoc()):
                    $total+=($row['i_quantity']* $row['i_price']);
                ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row h-5">
                                     <div class="col-md-4" style="text-align: -webkit-center">
                                         <a href="cart_delete.php"><button class="rem_cart btn btn-sm btn-outline-danger">
                                          <form method="post" action="cart_delete.php">
                                                <i class="fa fa-trash"></i>
                                                    <input type="hidden" name="cart_id" value="<?php echo $row['cart_id']?>">
                                                    </button>
                                            </form>
                                            </a>
                                                <img src="images/<?php echo $row['i_image'] ?>" alt="" height="100px"
                                                    width="100px">
                                    </div>
                                    <div class="col-md-4">
                                        <p><b>
                                                <large><?php echo $row['i_name'] ?></large>                                             </b></p>
                                      
                                        <p> <b><small>Unit Price :
                                                     Rs.<?php echo number_format($row['i_price'],2) ?></small></b></p>
                                        <p><small>QTY :</small></p>
                                         <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                           
                                           <!-- <td> -->
                                                <button class="btn btn-outline-secondary qty-minus" type="button"
                                                                                                 name="decqty">                                                   <span class="fa fa-minus"></button>
                                           </div>
                                           <input type="number"  value="<?php echo $row['i_quantity'] ?>" min="1" id="qty"
                                                    class="form-control text-center" name="qty">                                            <div class="input-group-prepend">
                                                 <button class="btn btn-outline-secondary qty-plus" type="button" 
                                                 name='inqty'>
                                                    <span class="fa fa-plus"></button>
                                           

                                          </div>
                                       </div>
                                  </div>
                                    <div class="col-md-4 text-right">
                                       <b>
                                             <large>
                                                Rs.<?php echo number_format($row['i_quantity'] * $row['i_price'],2) ?>
                                            </large>
                                         </b>
                                    </div>
                                 </div>
                             </div>
                        </div>
                       <?php endwhile; ?>
                    </div>
                     <div class="col-md-4">
                    <div class="sticky">
                             <div class="card">
                                 <div class="card-body">
                                    <p>
                                        <large>Total Amount</large>
</p>
                                   <hr>
                                  <p class="text-right"><b>Rs.<?php echo number_format($total,2) ?></b></p>
                                     <hr>
                                     <div class="text-center">
                                     <a href="payment.php" >  <input type="submit" class="btn" value="Proceed to Checkout"
                                            name="proccessed_checkout"></a>
                                    <a href="logout.php" >  <input type="button"  value="Log Out"
                                            name="logout"></a>     
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



         <!-- Footer section start -->
       <?php 
	    require('footer.php');
		?>
       <script>
      
//              //setting default attribute to disabled of minus button
//             //  document.querySelector(".qty-minus").setAttribute("disabled", "disabled");

// //taking value to increment decrement input value
// var valueCount



//plus button
document.querySelector(".qty-plus").addEventListener("click", function() {
    //getting value of input
    valueCount = document.getElementById("qty").value;

    //input value increment by 1
    valueCount++;

    //setting increment input value
    document.getElementById("qty").value = valueCount;

    if (valueCount > 1) {
        document.querySelector(".qty-minus").removeAttribute("disabled");
        document.querySelector(".qty-minus").classList.remove("disabled")
    }

})

//plus button
document.querySelector(".qty-minus").addEventListener("click", function() {
    //getting value of input
    valueCount = document.getElementById("qty").value;

    //input value increment by 1
    valueCount--;

    //setting increment input value
    document.getElementById("qty").value = valueCount

    if (valueCount == 1) {
        document.querySelector(".qty-minus").setAttribute("disabled", "disabled")
    }

})
// for delete

// $(document).on('click','.deletecart',function(){

//     var cart_id=$(this).val();
//     alert(cart_id);
// })
// </script>

    </body>

 </html>