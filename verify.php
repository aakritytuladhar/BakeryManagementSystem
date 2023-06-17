<?php

@include 'dbconfig.php';

if(isset($_POST['add_to_cart'])){

  
   $product_id=$_POST['c_id'];
   $product_iid=$_POST['i_id'];

   $select_cart ="SELECT * FROM `new_cart` WHERE  i_id='$product_iid'";
   $result=mysqli_query($con,$select_cart);
   if(mysqli_num_rows($result) > 0){
       $message[]='Product already added to cart';
   }
   else{
       $sql_insert=mysqli_query($con,"insert into new_cart (c_id,i_id) values('$product_id','$product_iid')" );
       $message[]='Product added to cart successfully';

   }

    
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>trail2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
   

</head>

<body>



    <!--navbar section start-->
    <?php
			require('nav.php');
	?>

    <!--sub nav section end-->

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
                $get = $con->query("SELECT * from new_cart,item where new_cart.i_id=item.i_id");
            
                // $cart_result=mysqli_query($con,$cart);
                while ($row=$get->fetch_assoc()):
                    $total+=($row['i_quantity']* $row['i_price']);
                ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row h-5">
                                    <div class="col-md-4" style="text-align: -webkit-center">
                                        <a href="javascript:void(0)" class="rem_cart btn btn-sm btn-outline-danger"
                                            data-id="<?php echo $row['c_id'] ?>"><i class="fa fa-trash"></i></a>
                                        <img src="images/<?php echo $row['i_image'] ?>" alt="" height="100px"
                                            width="100px">
                                    </div>
                                    <div class="col-md-4">
                                        <p><b>
                                                <large><?php echo $row['i_name'] ?></large>
                                            </b></p>
                                       
                                        <p> <b><small>Unit Price :
                                                    Rs.<?php echo number_format($row['i_price'],2) ?></small></b></p>
                                        <p><small>QTY :</small></p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary qty-minus" type="button"
                                                    data-id="<?php echo $row['c_id'] ?>"><span
                                                        class="fa fa-minus"></button>
                                            </div>
                                            <input type="number" readonly value="<?php echo $row['i_quantity'] ?>" min=1
                                                class="form-control text-center" name="qty">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary qty-plus" type="button" id=""
                                                    data-id="<?php echo $row['c_id'] ?>"><span
                                                        class="fa fa-plus"></span></button>
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
                                        <input type="submit" class="btn" value="Proceed to Checkout"
                                            name="proccessed_checkout">
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
            $('.view_prod').click(function () {
                uni_modal_right('Product', 'view_prod.php?id=' + $(this).attr('data-id'))
            })
            $('.qty-minus').click(function () {
                var qty = $(this).parent().siblings('input[name="qty"]').val();
                update_qty(parseInt(qty) - 1, $(this).attr('data-id'))
                if (qty == 1) {
                    return false;
                } else {
                    $(this).parent().siblings('input[name="qty"]').val(parseInt(qty) - 1);
                }
            })
            $('.qty-plus').click(function () {
                var qty = $(this).parent().siblings('input[name="qty"]').val();
                $(this).parent().siblings('input[name="qty"]').val(parseInt(qty) + 1);
                update_qty(parseInt(qty) + 1, $(this).attr('data-id'))
            })

            function update_qty(qty, id) {
                start_load()
                $.ajax({
                    url: 'admin/ajax.php?action=update_cart_qty',
                    method: "POST",
                    data: {
                        id: id,
                        qty
                    },
                    success: function (resp) {
                        if (resp == 1) {
                            load_cart()
                            end_load()
                        }
                    }
                })

            }
            $('#checkout').click(function () {
                if ('<?php echo isset($_SESSION['
                    login_user_id ']) ?>' == 1) {
                    location.replace("index.php?page=checkout")
                } else {
                    uni_modal("Checkout", "login.php?page=checkout")
                }
            })
        </script>

    </body>

</html>