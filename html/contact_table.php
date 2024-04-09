<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'yogyatri');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO contactus (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ($stmt->execute()) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
