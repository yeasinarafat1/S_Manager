<?php
/**
 * Delete a student from the database
 *
 * This script is called when the user clicks the "Delete" button
 * on the student list page. It retrieves the student's ID from
 * the GET request, deletes the student from the database, and
 * then redirects the user to the student list page.
 */
include('dbcon.php');

// Retrieve the student's ID from the GET request
$id = $_GET['id'] ?? '';
echo $id;

// Check if the ID is set
if (isset($_GET['id'])) {
    // Delete the student from the database
    $query = "DELETE FROM `student` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Redirect the user to the student list page
        header('location:index.php');
    }
}
?>
