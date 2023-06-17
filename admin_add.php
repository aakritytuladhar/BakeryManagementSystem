<?php

 require('dbconfig.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Add Admin</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.png" type="image/png">


</head>
<body>
	
  <?php require('admin_index.php');?>
<div class="main-content" style="margin-left:25rem; margin-top:1rem;">
       
        
          
	<h1>Add New Admin </h1>
	
		<form name="HtmlForm" method="post" action="admin_code.php" class=" regform">
			<ul>
            <li class="form-line">
					<div>
						
                    <b><label class="level">Full Name</label><br/>
						<!-- <i class="fa fa-envelope"></i> -->
						<span class="sub">
								
								<input type="name" name="fullname" class="regform-control" placeholder="Full Name" required>
						</span>
					</div>
			</li>
			<li class="form-line">
					<div>
						<b><label class="level">Username</label></br>
						<!-- <i class="fa fa-user"></i>	 -->
						<span class="sub">
							
								<input type="name" name="username" class="regform-control" placeholder="Username " required>
						</span>
					</div>
				</li>
				
				<li class="form-line">
					<div>
						<label class="level">Password</label></br>
						<!-- <i class="fa fa-lock"></i> -->
						<span class="sub">
								
								<input type="password" name="password" class="regform-control" placeholder="Password" required >
						</span>
					</div>
				</li>
				<li class="form-line">
					<input type="Submit"  value="Add Admin" class="btn btn-danger" name="add_admin">
				</li>
			</ul>
		
		</div>
	</form>
        </div>
</div>
<?php 
    require('admin_footer.php');
?>