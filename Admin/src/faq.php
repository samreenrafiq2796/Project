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
     

         <label for="ques" class="form-label  mt-3">Question</label>
         <textarea name ="ques" type="text" class="form-control" rows="4" placeholder="Write your discription"></textarea>
         <label for="ans" class="form-label  mt-3">Answer</label>
         <textarea name ="ans" type="text" class="form-control" rows="4" placeholder="Write your discription"></textarea>

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
  $u_ques = $_GET['ques'];
  $u_ans = $_GET['ans'];
 }
$insert_query = "INSERT INTO `db_faq`(`Question`, `Answer`) 
VALUES ('$u_ques',' $u_ans')";

  $run = mysqli_query($con , $insert_query);
  if ($run) { ?>
   <script>
     alert("Data Inserted Successfully");
 
 </script>
   <?php } 

 ?>
 


 <?php
        include('footer.php');
        ?>