<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php") ?>
<div class="container">
    <h2 class="text-center">Contact Us</h2>
    <form action=""method="post">
        <p  class="my-2">Enter Name</p>
        <input type="text" class="form-control" name="uname" 
        placeholder="Please Enter Your Name">

        <p class="my-2">Enter Email</p>
        <input type="email" class="form-control" name="uemail" 
        placeholder="Please Enter Your Email">

        <p class="my-2">Select Purpose</p>
    <select name="purpose" id="" class="form-control">
        <option value="Appreciation">Appreciation</option>
        <option value="Complain">Complain</option>
        <option value="Other">Other</option>
    </select>

    <p class="my-2">Enter Message</p>
    <textarea name="msg" id="" class="form-control"></textarea>

    <br>
    <center>
    <button type="submit" name="btn" class="btn btn-dark">Submit </button>
    </center>
    </form>
    </div>

    <?php
        if (isset($_POST["btn"])) {
            $a= $_POST["uname"];
            $b= $_POST["uemail"];
            $c= $_POST["purpose"];
            $d= $_POST["msg"];


            $query ="INSERT INTO `tbl_contact`
            ( `Name`, `Email`, `Msg`, `Purpose`) 
            VALUES ('$a','$b','$d','$c')";
            $run = mysqli_query($con, $query);
            if ($run) { ?>
               <script>
                    alert("Your Message has been Submitted");
               </script>
         <?php   }
        }


    ?>

    <?php include("footer.php") ?>

</body>
</html>