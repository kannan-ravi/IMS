<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $investor_id = mysqli_real_escape_string($conn, $_POST['investor_id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $card_type = mysqli_real_escape_string($conn, $_POST['card_Type']);
    $reasons = isset($_POST['reason_for_missing_card']) && is_array($_POST['reason_for_missing_card'])
        ? implode(', ', $_POST['reason_for_missing_card'])
        : '';

    $sql = "INSERT INTO apply_invcard (full_name, investor_id, email, phone, card_type, reasons) 
            VALUES ('$full_name', '$investor_id', '$email', '$phone', '$card_type', '$reasons')";

   if (mysqli_query($conn, $sql)) {
    header('Location: apply-for-inv-card.php?status=success');
    exit(); // Prevent further execution after redirect
}
} else {
    header('Location: apply-for-inv-card.php');
}
?>
