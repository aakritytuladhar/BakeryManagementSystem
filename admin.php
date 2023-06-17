
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
                      
                
                    <img src="images/facebook_cover_photo_1.png"  style="width:250px" > 
              
                     </li>
                    
                </ul>
                       
        
                 <div class="clear-fix">
                </div>
             </div> 
</section>

    <div class="container">
		<div  class="loginbox">
	<h2> Admin Log in  </h2>
		<form name="HtmlForm" method="post" action="admin_config.php"  class="form">
			<ul>
				<li class="form-line">
					<div>
					<b>	<label class="level">Username</label>
						<i class="fa fa-user"></i>
						<span class="sub">
							<input type="name" name="al_username" class="form-control" placeholder="username" required>
						</span>
					</div>
				</li>
				<li class="form-line">
					<div>
						<label class="level">Password</label>
						<i class="fa fa-lock"></i>
						<span class="sub">
							<input type="password" name="al_password" class="form-control" placeholder="password" required >
						</span>
					</div>
				</li>
				<li class="form-line">
					<input type="Submit" class="btn btn-danger">
				</li>
			</ul>
			<!-- <a href="#">Forgotten Password</a>
			<hr>
			<p class="note">Don't have an account yet?</p>
			<a href="admin.php">Create your account</a> -->
		</div>
	</form>
</div>
</div>
	<?php
        require('admin_footer.php');
    ?>
</body>
</html>