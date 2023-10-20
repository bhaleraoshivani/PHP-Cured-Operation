<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">

            <div class="title">
                Student Registration Form</div>

            <div class="form">

                <div class="input_field">
                    <label> First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label> Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label> Class</label>
                    <input type="text" class="input" name="sclass" required>
                </div>


                <div class="input_field">
                    <label> Email</label>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label> Password</label>
                    <input type="password" class="input" name="password" required>
                </div>


                <div class="input_field">
                    <label>Phone</label>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" required></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>


                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="submit">

                </div>




                <div class="records">
                    <a href="display.php" class="btn">Cheak All Records</a> <br>
                </div>



            </div>
        </form>
    </div>
</body>

</html>













<?php


include 'connection.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sclass = $_POST['sclass'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $addr = $_POST['address'];


    $insertquery = "insert into studentregistration(fname,lname,sclass,email,password,phone,address)
         values('$fname','$lname','$sclass','$email','$pass','$phone','$addr')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
?>
        <script>
            alert("Data inserted Properly");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data  not inserted ");
        </script>
<?php

    }
}
?>