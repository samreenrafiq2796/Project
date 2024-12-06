<?php
    include("../../../connection.php");
    $run= mysqli_query($con,"delete from tbl_product");
    if ($run)  { ?>
        <script>
         alert("All Record Deleted Successfully");
         window.location.href = "../showproduct.php";
        </script>
 <?php    }
?>