<?php
include('db_connect.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$investor_id = $_POST['investor_id'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$country = $_POST['country'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$nominee_name = $_POST['nominee_name'];
$per_share = $_POST['per_share'];
$relationship = $_POST['relationship'];
$nominee_email = $_POST['nominee_email'];
$nominee_number = $_POST['nominee_number'];
$nominee_country = $_POST['nominee_country'];
$total_invest = $_POST['total_invest'];
$roi = $_POST['roi'];
$time_period = $_POST['time_period'];
$tenure = $_POST['tenure'];

// Validate passwords
if ($password !== $confirm_password) {
    die("Passwords do not match!");
}

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO users (
    investor_id, 
    f_name, 
    l_name, 
    age, 
    email, 
    phone_number, 
    country, 
    username, 
    password, 
    nominee_name, 
    per_share, 
    relationship, 
    nominee_email, 
    nominee_number, 
    nominee_country, 
    total_invest, 
    roi, 
    time_period, 
    tenure
) VALUES (
    '$investor_id', 
    '$f_name', 
    '$l_name', 
    '$age', 
    '$email', 
    '$phone_number', 
    '$country', 
    '$username', 
    '$hashed_password', 
    '$nominee_name', 
    '$per_share', 
    '$relationship', 
    '$nominee_email', 
    '$nominee_number', 
    '$nominee_country', 
    '$total_invest', 
    '$roi', 
    '$time_period', 
    '$tenure'
)";

if ($conn->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
