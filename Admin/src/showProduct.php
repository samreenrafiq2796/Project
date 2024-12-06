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
 
  <a class="btn btn-primary me-md-2" href="product.php"type="button">Add</a>
  <a class="btn btn-danger me-md-2" 
  href="DeleteLogics/DeleteAllProduct.php" 
  type="button">Clear</a>

</div>
            <div class="container-fluid my-3">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>

                            
                        </tr>
                    </thead>
          
                <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `tbl_product` ORDER BY `TimeOfRecord` DESC");
                if (mysqli_num_rows($run_Query) ==0 ) {?>
                    <tr>
                        <td colspan="9">No Data Found</td>
                    </tr>
               <?php } else {
                 while($fetch =mysqli_fetch_array($run_Query)){?>
                    <tr>
                        <td><?php echo $fetch['0']?></td>
                        <td><?php echo $fetch['1']?></td>
                        <td class="text-wrap"><?php echo $fetch['5']?></td>
                        <td class="text-wrap"><?php echo $fetch['2']?></td>
                        <td><img src="../<?php echo $fetch['6']?>" alt=""></td>

                        <td><a href="DeleteLogics/deleteproduct.php?a=<?php echo $fetch['0']?>"><i class="fa fa-trash text-danger"></i></a></td>
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
     