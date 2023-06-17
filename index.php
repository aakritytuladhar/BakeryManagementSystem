<?php 

session_start();
// $user_name= $_SESSION['name'];
    require('dbconfig.php');
    $sql="Select * from banners where id=2 || id=3 || id=4";
     $result=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Akaliko Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
   

</head>

<body>



    <!--navbar section start-->
   <?php
        require('nav.php');
        
        include('alert_message.php');
    
?>
    <!--sub nav section end-->


    <!--banner section start-->
    <section class="banner">
        <div class="nav-container">
            <!-- Indicators -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/akalikocake.png" alt="Error" style="width:100%;">
                    </div>


                    <?php
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {
                        ?>
                    <div class="item">
                        <img src="images/<?php echo $row['gallery'];?>" alt="error" style="width:100%;">
                    </div>
                    <?php
                       }
                   }
               
                ?>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--banner section end-->

    <!--explore section start-->
    <section class="explore">
        <div class="container">
            <h1 class="text-center">Explore</h1>
            <div class="box-3 float-container ">
                <img src="images/Special.jpg" style="width:100%;" class="img-responsive">
                <h3 class="float-text">Special cakes</h3>
                <a href="specialcake.php" class="btn btn-outline-danger  float-button ">Explore</a>
            </div>

            <div class="box-3 float-container text-white ">
                <img src="images/Bakery assortment.jpg" style="width:100%;">
                <h3 class="float-text"> Bakery assortment</h3>
                <a href="bakery.php" class="btn btn-outline-danger  float-button ">Explore</a>
            </div>

            <div class="box-3 float-container text-white ">
                <img src="images/brownie & coffee.jpeg" style="width:100%;">
                <h3 class="float-text"> Browine & coffee</h3>
                <a href="coffee.php" class="btn btn-outline-danger  float-button ">Explore</a>
            </div>
            <div class="clear-fix">
            </div>
        </div>
    </section>
    <!--explore section end-->

    <!--bakery menu section start-->


    <?php 
                        include('best_sellers.php');
                        include('footer.php');
                    ?>


    <!--bakery menu section end-->

    <!-- Footer section start -->
   

</body>

</html>