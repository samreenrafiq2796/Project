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
 
  <a class="btn btn-primary me-md-2" href="faq.php"type="button">Add</a>
</div>
            <div class="container-fluid my-3">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            
                        </tr>
                    </thead>
          
                <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `db_faq`");
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
     