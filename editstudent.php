<?php include('dbcon.php')?>
<?php 
if (isset($_POST["addBtn"])) {
   $f_id = $_POST["id"];
   $f_roll = $_POST["roll"];
   $f_fullName = $_POST["fullName"];
   $f_semester = $_POST["semester"];
   $f_shift = $_POST["shift"];
   $f_phoneNumber = $_POST["phoneNumber"];
   $query = "update `student` set `roll` = '$f_roll', `fullName` = '$f_fullName', `semester` = '$f_semester', `shift` = '$f_shift', `phoneNumber` = '$f_phoneNumber' where `id` = $f_id;";
   $result = mysqli_query($connection,$query);
   if ($result) {
    header('location:index.php');  
   } else {
     die('connection failed');
   };
   
}
?>