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
      <!-- <label for="country"  name="country" class="form-control"></label> -->
    <select id="country" name="country"  class="form-control mt-4" >
        <option value="United States">United States</option>
        <option value="Canada">Canada</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="India">India</option>
        <option value="Australia">Australia</option>
        <option value="Germany">Germany</option>
        <option value="France">France</option>
        <option value="Italy">Italy</option>
        <option value="Spain">Spain</option>
        <option value="Brazi">Brazil</option>
        <!-- Add more countries here -->
    </select>
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
  $a_cont = $_GET['country'];

$insert_querry ="INSERT INTO `brand`(`Name`, `Country`) 
VALUES ('  $a_name','$a_cont ')";
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