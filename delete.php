<?php
include 'connect.php';


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];  // Get the ID of the record to delete

    // SQL query to delete the record
    $sql = "DELETE FROM `crud_table` WHERE id = $id";
    
    // Execute the query
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        // Redirect to the display page after successful deletion
        header('Location: display.php');  // Ensure this is the correct page to go back to
        exit();  // Stop further script execution
    } else {
        // If query fails, show an error
        die(mysqli_error($con));
    }
} else {
    // If no deleteid is set, show an error or redirect back to the list
    echo "No record selected for deletion!";
    exit();
}
?>
