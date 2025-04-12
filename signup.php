<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn
    ->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('User registered successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
