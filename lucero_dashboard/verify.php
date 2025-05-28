<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "SIGNUP");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $conn->prepare("UPDATE users SET verified = 1 WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Email verified successfully!";
    } else {
        echo "Invalid or expired verification link.";
    }

    $stmt->close();
} else {
    echo "No token provided.";
}

$conn->close();
?>
