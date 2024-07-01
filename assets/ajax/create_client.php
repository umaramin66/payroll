<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $abn = $_POST['abn'];
    $invoice_date_type = $_POST['invoice_date_type'];
    $payment_terms = $_POST['payment_terms'];
    $status = $_POST['status'];
    $contract_name = $_POST['contract_name'];
    $email = $_POST['email'];
    $description = $_POST['description'];

    $sql = "INSERT INTO clients (name, abn, invoice_date_type, payment_term, status, contract_name, email, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $abn, $invoice_date_type, $payment_terms, $status, $contract_name, $email, $description);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
