<?php include('dbcon.php')?>
<?php 
if (isset($_POST["addBtn"])) {
   $f_roll = $_POST["roll"];
   $f_fullName = $_POST["fullName"];
   $f_semester = $_POST["semester"];
   $f_shift = $_POST["shift"];
   $f_phoneNumber = $_POST["phoneNumber"];
   $query = "INSERT INTO `student` ( `roll`, `fullName`, `semester`, `shift`, `phoneNumber`) VALUES ( '$f_roll','$f_fullName','$f_semester','$f_shift','$f_phoneNumber');";
   $result = mysqli_query($connection,$query);
   if ($result) {
    header('location:index.php');  
   } else {
     die('connection failed');
   }
   
}
?>