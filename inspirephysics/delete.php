<?php
include 'connection.php';
$id = $_GET['ids'];
$deletequery = "delete from studentregis where id = '$id' ";
$query = mysqli_query($con, $deletequery);
if($query){
    ?>
    <script>
        alert("deleted data successfully");
    </script>
    <?php
}

header('location:details.php');


?>