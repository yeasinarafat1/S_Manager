<?php include('dbcon.php')?>
<?php
$id = $_GET['id'];
echo $id;
if (isset( $_GET['id'])) {
    $query = "delete from `student` where `id` = '$id'";
    $reult = mysqli_query($connection,$query);
    if ($reult) {
       header('location:index.php'); 
    }
} 
 ?>