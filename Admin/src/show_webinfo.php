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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
  <a class="btn btn-primary me-md-2" href="website_info.php"type="button">Add</a>
</div>
            <div class="container-fluid my-3 overflow-auto">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>XLink</th>
                        </tr>
                    </thead>
          
                <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `db_websiteinfo` order by id desc");
                if (mysqli_num_rows($run_Query) ==0 ) {?>
                    <tr>
                        <td colspan="9">No Data Found</td>
                    </tr>
               <?php } else {
                 while($fetch =mysqli_fetch_array($run_Query)){?>
                    <tr>
                        <td class="text-wrap"><?php echo $fetch['0']?></td>
                        <td class="text-wrap"><?php echo $fetch['1']?></td>
                        <td class="text-wrap"><?php echo $fetch['2']?></td>
                        <td class="text-wrap"><?php echo $fetch['3']?></td>
                        <td class="text-wrap"><?php echo $fetch['4']?></td>
                        <td class="text-wrap"><?php echo $fetch['5']?></td>
                        <td class="text-wrap"><?php echo $fetch['6']?></td>
                        <td class="text-wrap"><?php echo $fetch['7']?></td>
                        <td class="text-wrap"><?php echo $fetch['8']?></td>
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
     