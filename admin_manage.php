<?php 
    session_start();

  
    require('dbconfig.php');
    $sql="Select * from admin_login";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Manage</title>
    <link rel="icon" href="images/favicon.png" type="image/png">

</head>
<body>
    <?php
require('admin_index.php');?>
<div class="main-content" style="margin-left:25rem; margin-top:1rem;">
        <div class="admin">
            <h1> Manage admin </h1>
        <br/>  
        <?php
        include('alert_message.php');
        ?>
            <a href="admin_add.php" class="btn-danger">Add admin </a>
            <br/> <br/> 
            <table class="tbl-full">
                <tr>
                    <th> S.N</th>
                    <th>Full Name</th>
                    <th>Username </th>
                    <th>Actions </th>
                </tr>
                <?php
                        
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {
                 ?>
                            <tr>
                            <!-- <form name="HtmlForm" method="get" action="admin_deletesql.php"  class="form"> -->

                                 <td><?php echo $row['al_id']?></td>
                                 <td><?php echo $row['al_fn']?></td>
                                 <td><?php echo $row['al_username']?></td>
                                 <td>
                                    <a href="admin_update.php?al_id=<?php echo $row['al_id']?>"><input type="submit" class="btn-danger" value="Update" name="admin_update"></a> &nbsp
                                 <form method="post" action="admin_code.php" class="d-inline">
                                 <input type="hidden" name="al_id" value="<?php echo $row['al_id']; ?>">
                                 <input type="submit" class="btn-danger" value="Delete" name="admin_delete">
                            </form>

                                </td>
                                
               
                <?php
                            }
                        }?>
                 </tr>
             </table>
        </div>
</div>
<?php 
    require('admin_footer.php');
?>