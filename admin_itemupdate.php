<?php

 require('dbconfig.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Update Item</title>
	<link rel="icon" href="images/favicon.png" type="image/png">

	<meta charset="utf-8">

</head>
<body>
<?php 
			 require('admin_index.php');
			
			if(isset($_GET['i_id'])){
		  	 $i_id=mysqli_real_escape_string($con,$_GET['i_id']);
			 $sql= "select * from item where i_id=$i_id";
			 $result=mysqli_query($con,$sql);

			 if(mysqli_num_rows($result)>0){
				$item=mysqli_fetch_array($result);
				?>
				<div class="main-content" style="margin-left:25rem; margin-top:1rem;">
        <div class="admin">
       
        
          
		<h1> Edit Item </h1>
	
	<form name="HtmlForm" method="post" action="admin_code.php" class=" regform" enctype="multipart/form-data">
		<ul>
		<li class="form-line">
				<div>
					
				<b><label class="level"> Name</label><br/>
					<!-- <i class="fa fa-envelope"></i> -->
					<span class="sub">
					<input type="hidden" name="i_id" value="<?php echo $item['i_id']?>">

							<input type="name" name="i_name" class="regform-control" placeholder="<?php echo $item['i_name'];?>" required>
					</span>
				</div>
		</li>
		<li class="form-line">
				<div>
					<b><label class="level">Category Name</label></br>
					<!-- <i class="fa fa-user"></i>	 -->
					<span class="sub">
						
				
						<select name="i_category" id="lang" class="btn-danger">
							<option value="fathers_day">Fathers Day</option>
							<option value="mothers_day">Mothers Day</option>
							<option value="bakery_aasortment">Bakery Aasortment</option>
							<option value="special_cake">Special Cake</option>
							<option value="bhaitika">Bhaitika</option>
							<option value="brwonie_coffee">Brwonie Coffee</option>
							<option value="best_sellers">Best Sellers</option>
							<!-- <option value="new_category">N</option> -->
						</select>
					</span>
				</div>
			</li>
			
			<li class="form-line">
				<div>
					<label class="level">Price</label></br>
					<!-- <i class="fa fa-lock"></i> -->
					<span class="sub">
							
							<input type="text" name="i_price" class="regform-control" placeholder="<?php echo $item['i_price'];?>" required >
					</span>
				</div>
			</li>
			<li class="form-line">
				<div>
					<label class="level">Quantity</label></br>
					<!-- <i class="fa fa-lock"></i> -->
					<span class="sub">
							
							<input type="text" name="i_quantity" class="regform-control" placeholder="<?php echo $item['i_quantity'];?>" required >
					</span>
				</div>
			</li>
			<li class="form-line">
				<div>
					<label class="level">Upload Image</label></br>
					<!-- <i class="fa fa-lock"></i> -->
					<span class="sub">
							
					<input type ="file" placeholder="file"  name="i_image"> <br/>
					</span>
				</div>
			</li>
			<li class="form-line">
				<input type="Submit"  value="Update Item" class="btn btn-danger" name="updatesql_item">
			</li>
		</ul>
	
	</div>
</form>
<?php
			 }
			 else
			 {
				echo"
				<h3> No Such Name Found </h4>";
			 }
		}
	?>
	</div>
</div>
<?php 
require('admin_footer.php');
?>

