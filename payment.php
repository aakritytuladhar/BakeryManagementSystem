<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
<style>
    .pay{

background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/payment.jpg) ;
background-attachment:fixed;  
background-size :1900px;
 background-repeat:no-repeat; */
background-position:100%; 
background-width:
}
    </style>
</head>

<body>
     <!--navbar section start-->
     <?php 
    require('nav.php');
    ?> 
     <!--navbar section end-->

    <section class="pay">
    <div class="payment">
        <div class="container">
              <h2 class="text-center">Checkout </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                    <div class="card-body">
                    <form action="order_detail.php" id="checkout-frm" method="post">
                            <h4>Confirm Delivery Information</h4>
                            <div class="form-group">
                                <label for="" class="control-label">Full Name</label>

                                <input type="name" name="name" class="form-control" placeholder="Full Name" required>
                             </div>
                            <div class="form-group">
                                <label for="" class="control-label">Contact</label>
                                <input type="text" name="mobile" required="" class="form-control" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Address</label>
                                <textarea cols="30" rows="3" name="address" required="" class="form-control"
                                    placeholder="Eg. street,city,country"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" name="email" required="" class="form-control" placeholder="Emails">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Select Date & Time:</label>
                                <input type="datetime-local" name="event_dt" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="control-label">Payment mode</label><br />
                                <input type="radio" name="cod" value="cod" checked>
                                <label for="" class="control-label"> Cash On Delivery</label><br />

                                <input type="radio" name="cod" value="khalti">
                                <label for="" class="control-label"> Khalti</label>

                            </div> 


                            <div class="text-center">
                                <input type="submit" class="btn btn-block btn-outline-primary" value="Place Order" name="place_value">

                            </div>
                        </form>
                    </div>
                </div>
                </div>
                
            </div>

        </div>
    </div>
</section>
    

    
    <!-- Footer section start -->
    <section>
        <div class="main-footer">
            <div class="inner-footer">
                <div class="container px-50">
                    <div class="row ">
                        <div class="col-lg-3 col-sm-6 contact-us pt-sm-0 pt-4">
                            <h6>OUR POLICIES</h6>
                            <ul>
                                <li>
                                    <a href="#">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Terms of Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Cancellation & Refund
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div class="col-lg-3 col-sm-6 contact-us pt-sm-0 pt-4">
                            <h6>Contact us</h6>
                            <ul>
                                <li>
                                    <a href="tel: +9841296726">
                                        (+977) 984-1296726
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        akalikobakery@gmail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="google_map.html">
                                        Jyoti Bhawan,Kathmandu
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 links pt-lg-0 pt-4" id="quick">
                            <h6>Quick Links</h6>
                            <ul>
                                <li>
                                    <a href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 subscribe pt-lg-0 pt-4">
                            <h6>Subscribe Now</h6>
                            <form class="form-inline input-group">
                                <input class="form-control" type="search" placeholder="Your E-mail address..."
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">SUBMIT</button>
                                </div>
                            </form>
                            <div class=" text-right social">
                                <a href="#">
                                    <img class="img-fluid" src="images/fb.svg" alt="">
                                </a>

                                <a href="#">
                                    <img class="img-fluid" src="images/insta.svg" alt="">
                                </a>
                                <a href="#">
                                    <img class="img-fluid" src="images/skype.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Copyright start -->
        <div class="copyright">
            <div class="container text-center text-black">
                <p>&copy;2023, All rights reserved,AkaliKo Bakery(Pvt.)Ltd</p>
            </div>
        </div>
        <!-- Copyright end -->
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            function HandleClick() {
                var email = document.LogIn.email.value;
                var Password = document.LogIn.password.value;
                if (email != "akalikobakery@gmail.com" && Password != "Akali123") {
                    alert("Please check whether your email and password are correct");
                    return false;
                    console.log = "gret"
                }

            }
        </script>




    </section>

  <script src="khalti-client.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://rawgit.com/google/code-prettify/master/styles/sons-of-obsidian.css" />
<script type="text/javascript">
    $(function(){
        // just show the live js here.
        $.ajax({url: "khalti.js", success: function(resp){
            $("#js-code-here").text(resp.trim());
            addEventListener('load', function(event) { PR.prettyPrint(); }, false);
        }, dataType: 'html'});
        $.get({url: "example.js", success: function(resp){
            $("#js-example-here").text(resp.trim());
            addEventListener('load', function(event) { PR.prettyPrint(); }, false);
        }, dataType: 'html'});
    });
    </script>
</body>

</html>