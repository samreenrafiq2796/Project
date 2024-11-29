<?php
    include("../../../connection.php");
    $run= mysqli_query($con,"delete from db_about");
    if ($run)  { ?>
        <script>
         alert("All Record Deleted Successfully");
         window.location.href = "../show_about.php";
        </script>
 <?php    }
?>