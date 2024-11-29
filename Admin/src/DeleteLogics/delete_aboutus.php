<?php
    include "../../../connection.php";
    if (isset($_GET["a"])) {
        $id = $_GET["a"];
        $run = mysqli_query($con,
        "delete from db_about where id = $id");
        if ($run) { ?>
           <script>
            alert("Record Deleted Successfully");
            window.location.href = "../show_about.php";
           </script>
    <?php    }
    }
    else{
        header("location: ../show_about.php");
    }

?>