<?php
include('db_connect.php');

// Check if form data exists for all required fields
if (isset($_POST['id']) && isset($_POST['f_name']) && isset($_POST['investor_id']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['total_invest']) && isset($_POST['roi']) && isset($_POST['nominee_name'])) {
    
    // Sanitize and escape inputs
    $id = $_POST['id'];
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $investor_id = mysqli_real_escape_string($conn, $_POST['investor_id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $total_invest = mysqli_real_escape_string($conn, $_POST['total_invest']);
    $roi = mysqli_real_escape_string($conn, $_POST['roi']);
    $nominee_name = mysqli_real_escape_string($conn, $_POST['nominee_name']);
    
    // Prepare the update query
    $query = "UPDATE users SET 
              f_name = '$f_name', 
              investor_id = '$investor_id', 
              email = '$email', 
              phone_number = '$phone_number', 
              total_invest = '$total_invest', 
              roi = '$roi', 
              nominee_name = '$nominee_name' 
              WHERE id = '$id'";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Failed to update user"]);
    }
} else {
    echo json_encode(["error" => "Missing required data"]);
}
?>
