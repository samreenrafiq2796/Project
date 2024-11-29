<?php
    include "../../../connection.php";
    if (isset($_GET["a"])) {
        $id = $_GET["a"];
        $run = mysqli_query($con,
        "delete from tbl_contact where id = $id");
        if ($run) { ?>
           <script>
            alert("Record Deleted Successfully");
            window.location.href = "../contact.php";
           </script>
    <?php    }
    }
    else{
        header("location: ../contact.php");
    }

?>