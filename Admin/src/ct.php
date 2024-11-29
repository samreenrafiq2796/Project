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
      <label for="name" class="form-label  mt-3">Full Name</label>
         <input name="name" type="text" class="form-control" placeholder="Enter your name">
    
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
  $a_name = $_GET['name'];
 

$insert_querry ="INSERT INTO `category`(`Name`)
 VALUES ('$a_name')";
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