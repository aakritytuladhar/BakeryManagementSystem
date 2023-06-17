<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Nav</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" type="text/css" href="css/admin.css">

   
</head>
<body>
    <!-- <header class="sticky-top menubar"> -->
	
		
	<!-- </header> -->
    
    <section class="subnav">
      
            <div class="subnav-links">
                <ul>
                        <li class="logo">
                      <!-- logo -->
                      
                
                      <a href="admin_dashboard.php"> <img src="images/facebook_cover_photo_1.png"  > </a>
              
                     </li>
                     <li>
                             <a href="admin_dashboard.php"> Home</a>
                       </li>
                       <li>
                               <a href="admin_manage.php"> Admin</a>
                       </li>

                       <!-- <li>
                               <a href="admin_category.php"> Category</a>
                       </li> -->
                       <li>
                               <a href="admin_item.php"> Food </a>
                       </li>
                       <li>
                               <a href="admin_orderview.php"> Order</a>
                       </li>
                       <li>

                        <!-- login -->

                        <i class="bi bi-person-fill"></i> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>

                        </a>
                        <?php
                             
                             echo $_SESSION['name'];
                           
                           ?>
                    </li>
                </ul>
                       
        
                 <div class="clear-fix">
                </div>
             </div> 
        
     </section>
   
</body>
</html>