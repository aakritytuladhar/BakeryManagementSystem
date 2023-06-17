  <!-- database connection -->
    <?php
    
      $con=mysqli_connect("localhost","root","","bakery_management");
          if(!$con)
             {
                  die("Sorry connection Fail".mysqli_error(1));
              }
      ?>