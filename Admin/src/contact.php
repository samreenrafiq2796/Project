<?php
include('header.php');
?> 
 <?php
    include('_navbar.php');
    ?>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <?php
        include('_sidebar.php');
        ?>
         <!-- partial -->
         <div class="main-panel">
          <div class="content-wrapper">
       
            <div class="container-fluid my-3">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Purpose</th>
                            <th>Message</th>
                            <th>Delete</th>


                            
                        </tr>
                    </thead>
          
                <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `tbl_contact` order by record_time desc");
                if (mysqli_num_rows($run_Query) ==0 ) {?>
                    <tr>
                        <td colspan="9">No Data Found</td>
                    </tr>
               <?php } else {
                 while($fetch =mysqli_fetch_array($run_Query)){?>
                    <tr>
                        <td><?php echo $fetch['0']?></td>
                        <td><?php echo $fetch['1']?></td>
                        <td><?php echo $fetch['2']?></td>
                        <td><?php echo $fetch['4']?></td>
                        <td><?php echo $fetch['3']?></td>
                        <td><a href="DeleteLogics/deletecontact.php?a=<?php echo $fetch['0']?>"><i class="fa fa-trash text-danger"></i></a></td>

                        
                    </tr>

                 <?php }
                }
                
                
                ?>

                </table>
            </div>
</div>
</div>
</div>

          <?php
        include('footer.php');
        ?>
     