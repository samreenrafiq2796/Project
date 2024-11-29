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
       
       <!-- Email -->
      
         <label  class="form-label  mt-3">Email Address</label>
         <input name ="email" type="email" class="form-control" placeholder="Enter your email">

         <label  class="form-label  mt-3">Contact</label>
         <input name ="cont" type="tel" class="form-control" placeholder="Enter your contact no">

         <label for="add" class="form-label  mt-3">Address</label>
         <input name ="add" type="text" class="form-control" placeholder="Enter your address">

         <label for="dis" class="form-label  mt-3">Discription</label>
         <textarea name ="dis" type="text" class="form-control" rows="4" placeholder="Write your discription"></textarea>

         <label for="fb" class="form-label  mt-3">Facebook</label>
         <input  name ="fb" type="url" class="form-control" >

         <label for="insta" class="form-label  mt-3">Instagram</label>
         <input  name ="insta" type="url" class="form-control">

         <label for="x" class="form-label  mt-3">XLink</label>
         <input  name ="x" type="url" class="form-control" >
       
    
       <!-- Submit Button -->
       <!-- <div class="d-grid"> -->
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
    $nam = $_GET['name'];
    $em = $_GET['email'];
    $cons = $_GET['cont'];
    $add = $_GET['add'];
    $disc = $_GET['dis'];
    $fbl = $_GET['fb'];
    $instal = $_GET['insta'];
    $xl = $_GET['x'];
   
   $insert_query= "INSERT INTO `db_websiteinfo`(`Name`, `Email`, `Contact`, `Address`, `Discription`, `Facebook`, `Instagram`, `XLink`)
    VALUES ('$nam','$em','  $cons','$add','$disc','$fbl',' $instal',' $xl')";
 
 $run = mysqli_query($con , $insert_query);
 if ($run) {?>
    <script>
       alert("Data Inserted Successfully");
      
    </script>
    <?php }else{
        ?>
        <script>
           alert("Data not Inserted ");
          
        </script>
        <?php
    }
    
}
 ?>
 <?php
        include('footer.php');
        ?>