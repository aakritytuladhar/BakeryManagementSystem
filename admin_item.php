<?php 
 session_start();
   
    require('dbconfig.php');
    $sql="Select * from item";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Item Manage</title>
    <link rel="icon" href="images/favicon.png" type="image/png">

    <!-- <link rel="stylesheet" type="text/css" href="css/admin2.css"> -->

</head>
</body>
<?php require ('admin_index.php');?>
    <div class="main-content "style="margin-left:25rem; margin-top:1rem;">
        <div class="admin">
            <h1> Item Manage </h1>
           
        <br/>  

        <?php
        include('alert_message.php');
        ?>
            <a href="admin_itemadd.php" class="btn-danger">Add Items </a>
            <br/> <br/> 
            <table class="tbl-full">
                <tr>
                    <th> S.N</th>
                    <th> Image</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th>Quantity </th>
                    <th> Action </th>
                    
                </tr>
                <?php
                        if(mysqli_num_rows($result)>0) 
                        {
                            
                            
                             while($row=mysqli_fetch_array($result))
                            {

                 ?>
                            <tr>
                            <!-- <form name="HtmlForm" method="post" action="admin_code.php"  class="form"> -->
                                 <td><?php echo $row['i_id']?></td>
                                 <td><img src="images/<?php echo $row['i_image'] ?>" alt="" height="100px" width="100px"></td>
                                 <td> <?php echo $row['i_name']?></td>
                                 <td><?php echo $row['i_price']?></td>
                                 <td><?php echo $row['i_quantity']?></td>

                                 
                                 <td>
                                 <a href="admin_itemupdate.php?i_id=<?php echo $row['i_id']?>"><input type="submit" class="btn-danger" value="Update" name="item_update"></a> &nbsp
                                 <form method="post" action="admin_code.php" class="d-inline">
                                 <input type="hidden" name="i_id" value="<?php echo $row['i_id']; ?>">
                                 <input type="submit" class="btn-danger" value="Delete" name="item_delete">
                                
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