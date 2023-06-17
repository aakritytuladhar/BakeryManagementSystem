<?php
  

    require('dbconfig.php');
  
 require('admin_index.php');?>
<div class="main-content" style="margin-left:25rem; margin-top:1rem;">
        <h1>Edit Admin </h1> 
		<?php 
			if(isset($_GET['al_id'])){
		  	$al_id=mysqli_real_escape_string($con,$_GET['al_id']);
			 $sql= "select * from admin_login where al_id=$al_id";
			 $result=mysqli_query($con,$sql);

			 if(mysqli_num_rows($result)>0){
				$admin_name=mysqli_fetch_array($result);
				?> 
        <form name="HtmlForm" method="post" action="admin_code.php" class=" regform">
          <ul>
            <li class="form-line">
              <div>
                <b>
                  <label class="level">Full Name</label>
                  <br />
                  <!-- <i class="fa fa-envelope"></i> -->
                  <span class="sub">
				  <input type="hidden" name="al_id" value="<?php echo $admin_name['al_id']?>">

					
                    <input type="name" name="fullname" class="regform-control" placeholder="<?php echo $admin_name['al_fn'];?>" required>
                  </span>
              </div>
            </li>
            <li class="form-line">
              <div>
                <b>
                  <label class="level">Username</label>
                  </br>
                  <!-- <i class="fa fa-user"></i>	 -->
                  <span class="sub">
                    <input type="name" name="username" class="regform-control" placeholder="<?php echo $admin_name['al_username'];?> " required>
                  </span>
              </div>
            </li>
            <li class="form-line">
			 </div>
              <input type="Submit" value="Update admin" class="btn btn-danger" name="update_admin">
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