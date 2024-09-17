<?php
/**
 * Edit a student in the database
 *
 * This script is called when the user clicks the "Edit Student" button
 * on the student list page. It retrieves the student's information from
 * the POST request, updates the student's information in the database,
 * and then redirects the user to the student list page.
 
 */
include('dbcon.php');

if (isset($_POST["addBtn"])) {
    /* Get the student's information from the POST request */
    $f_id = $_POST["id"];
    $f_roll = $_POST["roll"];
    $f_fullName = $_POST["fullName"];
    $f_semester = $_POST["semester"];
    $f_shift = $_POST["shift"];
    $f_phoneNumber = $_POST["phoneNumber"];

    /* Update the student's information in the database */
    $query = "
        UPDATE `student`
        SET
            `roll` = '$f_roll',
            `fullName` = '$f_fullName',
            `semester` = '$f_semester',
            `shift` = '$f_shift',
            `phoneNumber` = '$f_phoneNumber'
        WHERE `id` = $f_id
    ";
    $result = mysqli_query($connection, $query);

    /* Check if the query was successful */
    if ($result) {
        /* Redirect the user to the student list page */
        header('location:index.php');
    } else {
        /* Display an error message if the query failed */
        die('connection failed');
    }
}
