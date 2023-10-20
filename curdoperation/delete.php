<?php

include 'connection.php';

$id = $_GET['ids'];

$deletequery =  "delete from studentregistration where id = $id ";

$query = mysqli_query($con, $deletequery);


if($query){
?>
    <script>
        alert("Data Deleted Sucessfully");
    </script>
<?php

header('location:display.php');

} else {
?>
    <script>
        alert("Data Not Deleted ");
    </script>
<?php

}



?>