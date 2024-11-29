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
      <form action="" method="get">
      <label for="dis" class="form-label  mt-3">Description</label>
         <textarea name ="dis" type="text" class="form-control" rows="4" placeholder="Write your discription"></textarea>

         <button type="submit" name="btn" class="btn btn-primary mt-3">Save</button>
       </div>
     </form>
   </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 <?php
 if (isset($_GET['btn'])) {

  $a_disc = $_GET['dis'];

  $insert_querry ="INSERT INTO `db_privacypolicy`(`Description`)
  VALUES ('$a_disc')";
$run = mysqli_query ($con,  $insert_querry);


  if ($run) { ?>
    <script>
      alert("Data Inserted Successfully");
     
    </script>
    <?php
    }
  
 }



 ?>


 <?php
        include('footer.php');
        ?>
        </body>