<?php
/**
 * The main page of the Student Manager application
 *
 * This page displays the student list, a search bar, and a button to add a new student.
 * If the user is logged in, it also displays a button to edit or delete a student.
 */
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Manager</title>
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
                /*
                 * If the user is logged in, display the add student button
                 */
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
