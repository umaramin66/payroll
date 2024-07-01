<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $schedule = $_POST['schedule'];
    $abn = $_POST['abn'];
    $frequency = $_POST['frequency']; // Assuming you get this data from the schedule form

    // Perform any additional validation or processing if needed

    // Example SQL query to insert the schedule data into the clients_invoice_schedule table
    $sql = "INSERT INTO clients_invoice_schedule (schedule, abn, frequency) VALUES (?, ?, ?)";
    
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $schedule, $abn, $frequency);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Schedule submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
