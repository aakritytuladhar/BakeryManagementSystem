<!DOCTYPE html>
<html>

<head>
    <title>Contactus</title>
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


    <!-- Contact form section Start -->
    <div class="contact-us">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact">
                        <h2 class="contact-title">Information</h2>
                        <p class="contact-text">Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco
                            cillum dolor. Voluptate exercitation incididunt</p>
                        <ul class="contact-list">
                            <li>
                                <span class="contact-list__icon"><i
                                        class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-list__text">Jyoti Bhawan,Kathmandu <br> Nepal</span>
                            </li>
                            <li>
                                <span class="contact-list__icon"><i
                                        class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-list__text">(+977) 984-1296726<br> </span>
                            </li>
                            <li>
                                <span class="contact-list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-list__text">akalikobakery@gmail.com <br></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-formbg">
                        <h2 class="contact-form__title">Say Something...</h2>
                        <form class="contact-form" id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input class="form-field" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input class="form-field" type="text" name="lastname">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Email Address*</label>
                                        <input class="form-field" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Message*</label>
                                        <textarea class="form-control text-area" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0 d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-hover-primary" type="submit"
                                            value="Send Massage">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Message Notification -->
                        <div class="form-messege"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form section End -->

    <!-- Contact Map Start -->
    <div class="section">
        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.200306030399!2d85.31261751506219!3d27.711101082790407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1901f369a401%3A0x7a779f015d75faa2!2sGrande%20City%20Hospital!5e0!3m2!1sen!2snp!4v1684340180425!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Google Map Area Start -->
    </div>
    <!-- Contact Map End -->
    <!-- Footer section start -->
 <?php 
  require('footer.php');
  ?>


</body>

</html>