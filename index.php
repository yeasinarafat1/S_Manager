<?php include('dbcon.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>
    <?php include('navbar.php')?> 
    <!-- The html code for this nabar will come from navbar.php it just created for clean code -->
    <div class="container flex-between my-3 ">
            <h2 class="fs-1">Student List</h2>
            <?php if (isset($_COOKIE['remember_username'])) {
                ?>
            <button type="button" class="btn btn-primary py-2" data-bs-toggle="modal" data-bs-target="#addStudentModal" data-bs-whatever="@mdo">Add Student</button>
            <?php
            }
            ?>

    </div>
              <p id="SearchResult" class="hidden text-center  fw-medium mt-4 fs-4">No Search Result Found</p>

    <?php include('addStudentModel.php')?>
    <?php include('studenttable.php')?>


    
<script src="js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>