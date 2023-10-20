<!DOCTYPE html>
<html lang="en">

<head>

    <title>Display Records</title>

    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="CSS/display.css">


    <div class="main-div">
        <h1 > **** List Of Students Registration Complited ****</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>fname</th>
                            <th>lname</th>
                            <th>sclass</th>
                            <th>email</th>
                            <th>password</th>
                            <th>phone</th>
                            <th>address</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        include 'connection.php';

                        $selectquery = " select * from studentregistration ";

                        $query = mysqli_query($con, $selectquery);

                        $nums = mysqli_num_rows($query);



                        while ($res = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <td> <?php echo $res['id']; ?> </td>
                                <td> <?php echo $res['fname']; ?> </td>
                                <td> <?php echo $res['lname']; ?> </td>
                                <td> <?php echo $res['sclass']; ?> </td>
                                <td> <?php echo $res['email']; ?> </td>
                                <td> <?php echo $res['password']; ?> </td>
                                <td> <?php echo $res['phone']; ?> </td>
                                <td> <?php echo $res['address']; ?> </td>

                                <td>
                                    <a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                </td>

                                <td>
                                    <a href="delete.php?ids=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>

                            </tr>

                        <?php

                        }

                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</head>

<body>

</body>

</html>