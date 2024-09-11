<?php 
session_start();
session_unset();
session_destroy();
setcookie('remember_username','',time() - 60*60*24);

header('location:index.php')
 ?>