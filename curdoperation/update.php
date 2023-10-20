<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <title>Update Form</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">


            <?php


            include 'connection.php';

            $ids = $_GET['id'];

            $showquery = " select * from studentregistration where id ={$ids}";

            $showdata = mysqli_query($con, $showquery);

            $arrdata = mysqli_fetch_array($showdata);

            if (isset($_POST['submit'])) {
                $idupdate = $_GET['id'];


                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $sclass = $_POST['sclass'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $phone = $_POST['phone'];
                $addr = $_POST['address'];


                // $insertquery = "insert into studentregistration(fname,lname,sclass,email,password,phone,address)
                //  values('$fname','$lname','$sclass','$email','$pass','$phone','$addr')";

                $query = "update  studentregistration  set id = $idupdate ,fname ='$fname',lname ='$lname',sclass ='$sclass',
         email ='$email',password ='$pass',phone ='$phone',address ='$addr' where  id = $idupdate";

                $res = mysqli_query($con, $query);

                if ($res) {
            ?>
                    <script>
                        alert("Data Updated Properly");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Data Not Updated ");
                    </script>
            <?php

                }
            }
            ?>


            <div class="title">
                Student Registration Form</div>

            <div class="form">

                <div class="input_field">
                    <label> First Name</label>
                    <input type="text" class="input" name="fname" value="<?php echo $arrdata['fname']; ?>" required>
                </div>

                <div class="input_field">
                    <label> Last Name</label>
                    <input type="text" class="input" name="lname" value="<?php echo $arrdata['lname']; ?> " required>
                </div>

                <div class="input_field">
                    <label> Class</label>
                    <input type="text" class="input" name="sclass" value="<?php echo $arrdata['sclass']; ?>" required>
                </div>


                <div class="input_field">
                    <label> Email</label>
                    <input type="text" class="input" name="email" value="<?php echo $arrdata['email']; ?>" required>
                </div>

                <div class="input_field">
                    <label> Password</label>
                    <input type="password" class="input" name="password" value="<?php echo $arrdata['password']; ?>" required>
                </div>


                <div class="input_field">
                    <label>Phone</label>
                    <input type="text" class="input" name="phone" value=" <?php echo $arrdata['phone']; ?>" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" value="<?php echo $arrdata['address']; ?>" required></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>


                <div class="input_field">
                    <input type="submit" value="Update" class="btn" name="submit">

                </div>

                <div class="records">
                    <a href="display.php">All Records</a> <br>

                </div>



            </div>
        </form>
    </div>
</body>

</html>