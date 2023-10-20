<?php

$username = "root";
$password = "";
$server = 'localhost';
$db  = 'crudoperation';


$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    // echo "Connection Successfull";
?>

    <script>
        alert('Connection Succesfull');
    </script>

<?php

} else {
    echo "No Connection";
    die("No connection" . mysqli_connect_error());
}
?>